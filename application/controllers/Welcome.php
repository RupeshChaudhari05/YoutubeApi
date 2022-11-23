<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['tags']=$this->reade_searches();
		$d=$this->db->query("SELECT * FROM category WHERE `status`='Active'");
	//	$res= ;
		$data['mydata']=$d->result();
		$this->load->view('home',$data);
	}

	public function categorypage($qq)
	{
		//print_r($data);die;
		$data['q']=$qq;
		$data['tags']=$this->reade_searches();
		$this->load->view('categorypage',$data);
	}


	public function detailpage($videoid)
	{
		$data['vid']=$videoid;

	//	print_r($videoid."                      ".$searchdata."                    ".$cacheFolder);die;
$data['tags']=$this->reade_searches();
//print_r($data);die;
		$this->load->view('detailpage',$data);
	}

	public function searchdata()
	{
		extract($_REQUEST);
		$value = $src;
		if ($value!=="") {
				$value=str_replace(' ', '-', $value);
		$data['q']=$value;
		$data['tags']=$this->reade_searches();
		$this->load->view('categorypage',$data);
			
		}else{
			
		}
	}

	public function reade_searches(){
	$dir = '././assets/cached/';
// Open a directory, and read its contents
$tags=array();
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
			if ($file!==''){
				$s =explode(".",$file);
			 array_push($tags,$s[0]);
			// array_filter($tags, function($value) { return !is_null($value) && $value !== ''; });
			 //echo "filename:" . $file . "<br>";
			}
    }
    closedir($dh);
		return array_filter($tags, function($value) { return !is_null($value) && $value !== ''; });
  }
}
	}

	public function fetch()
	{
		$output = '';
		$data = $this->fetch_data($this->input->post('limit'), $this->input->post('start'),$this->input->post('searchdata'));
		//print_r($data);die;
		$inp =$this->input->post('searchdata');
			foreach($data as $row)
			{
				//print_r($row);die;
				$output .='<div class="d">
          <table width="100%">
            <tbody>
              <tr>
                <td style="width:120px;vertical-align:top">
                  <img src="'.$row->image.'" class="lazy" data-src="'.$row->image.'" width="120" height="90" alt="'.$row->title.'">
                </td>
                <td class="description">
                  <div style="font-weight:bold">'.$row->title.'</div>by '.$row->channelTitle.' <br />
                  <span>
                    <a href="'.base_url("download")."/".$row->videoId."/".$inp.'" title="Download" style="color:#0563a4" rel="nofollow">Download</a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>';
			}
		
		echo $output;
	}


		

function fetch_data($limit, $start,$searchdata)
	{
		$data1 = $this->getdata($searchdata);
		$data= array_reverse($data1);
			if ($start==0) {
				$count=count($data);
				$actule=$count-$limit; 
				//	array_slice($data,$limit);
				return array_slice($data,$actule);
					
			}else{
				for ($i=0; $i < $start; $i++) { 
							array_pop($data);
				}
				$count=count($data);
				$actule=$count-$limit; 
				//print_r($actule);die;
				return array_slice($data,$actule);
			}
		//return $data;
	}









public function getdata($searchdata)
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
//echo "<pre>";
//print_r($result['items']);die;
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





	public function contactus(){
				$data['tags']=$this->reade_searches();
			$t =$this->db->query("SELECT contactus FROM setting WHERE `status`='Active'");
      $res= $t->result();
      $data['setting']=$res;
		$this->load->view('contactus',$data);
		
	}
	public function privacy(){
				$data['tags']=$this->reade_searches();
					$t =$this->db->query("SELECT privacy FROM setting WHERE `status`='Active'");
      $res= $t->result();
      $data['setting']=$res;
		$this->load->view('privacy',$data);
		
	}
	public function dmca(){
				$data['tags']=$this->reade_searches();
					$t =$this->db->query("SELECT dmca FROM setting WHERE `status`='Active'");
      $res= $t->result();
      $data['setting']=$res;
		$this->load->view('dmca',$data);
		
	}


}
