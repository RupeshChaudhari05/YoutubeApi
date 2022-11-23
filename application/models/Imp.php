<?php
Class Imp extends CI_Model {


// Read data using username and password
public function login($data) {
//print_r($data);die;
$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('register');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}
// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "username =" . "'" . $username . "' AND status='Active'";
$this->db->select('*');
$this->db->from('register');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


public function uploadImage()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $this
            ->load
            ->library('upload', $config);

        if (!$this
            ->upload
            ->do_upload('image'))
        {
            $error = array(
                'error' => $this
                    ->upload
                    ->display_errors()
            );
            $this
                ->load
                ->view('imageUploadForm', $error);
        }
        else
        {

            $uploadedImage = $this
                ->upload
                ->data();
            $this->resizeImage($uploadedImage['file_name']);

            print_r('Image Uploaded Successfully.');
            exit;
        }
    }

    public function resizeImage($filename)
    {
        $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
        $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/thumbnail/';
        $config_manip = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'maintain_ratio' => true,
            'create_thumb' => true,
            'thumb_marker' => '_thumb',
            'width' => 150,
            'height' => 150
        );

        $this
            ->load
            ->library('image_lib', $config_manip);
        if (!$this
            ->image_lib
            ->resize())
        {
            echo $this
                ->image_lib
                ->display_errors();
        }

        $this
            ->image_lib
            ->clear();
    }




public function getdata_api($searchdata)
	{	
$q = str_replace('-', ' ', $searchdata);
//print_r($q);
$limit=50;
$key = "AIzaSyArfpct_3h4U4gubXYE7Gcojvrbpv_swrI"; 
$cacheFolder = '././assets/cached/';
if(file_exists($cacheFolder.$searchdata.".json")) {
$data = json_decode(file_get_contents($cacheFolder."".$searchdata.".json"));
$msg = "cached";
// echo "<pre>";
// print_r($data);die;
return $data;

// echo '<iframe width="420" height="315"
// src="https://www.youtube.com/embed/AgiTrArkzcQ?autoplay=1&mute=1">
// </iframe>';
} else {
if(strlen($q)>5){

$gdata = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.urlencode(str_replace("-", "+", $q)).'&maxResults=' .$limit.'&key=' . $key);
}

$result =json_decode($gdata,true);
//print_r('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.urlencode(str_replace("-", "+", $q)).'&maxResults=' .$limit.'&key=' . $key);die;
$vresult=array();
$mydata=array();
// echo "<pre>";
// print_r($result['items']);die;
foreach ($result['items'] as $key => $item) {
       $vresult['videoId']=$item['id']['videoId'];
       $vresult['date']=$item['snippet']['publishedAt'];
       $vresult['title']=$item['snippet']['title'];
       $vresult['description']= $item['snippet']['description'];
       $vresult['channelTitle']= $item['snippet']['channelTitle'];
			 $vresult['image']= $item['snippet']['thumbnails']['default']['url'];
			 $vresult['image_high']= $item['snippet']['thumbnails']['high']['url'];
			 
      array_push($mydata,$vresult);
}

//print_r($mydata);die;

$json = json_encode($mydata);
//$q = str_replace('-', ' ', $searchdata);
if (file_put_contents($cacheFolder.$searchdata.".json", $json)){
   // echo "JSON file created successfully...";
		 //redirect('welcome/categorypage/'.$searchdata,'refresh');
		 //$this->categorypage($searchdata);
		// $vv =base_url($searchdata);
		 //header("Location: ".);
		// redirect($vv, 'refresh');


			return json_decode($json);

}


}
	}












}






?>