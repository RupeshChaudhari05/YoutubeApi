<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['tags']=$this->reade_searches();
		$this->load->view('home',$data);
	}

	public function detailpage()
	{
		$this->load->view('detailpage');
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
		$data = $this->fetch_data($this->input->post('limit'), $this->input->post('start'));
//print_r($data);die;
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
                    <a href="'.base_url("welcome/detailpage").'" title="Download" style="color:#0563a4" rel="nofollow">Download</a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>';
			}
		
		echo $output;
	}

function fetch_data($limit, $start)
	{
		$data1 = $this->getdata();
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









public function getdata()
	{
		
$q = 'beast whatsapp status ';
$limit=50;
$key = "AIzaSyArfpct_3h4U4gubXYE7Gcojvrbpv_swrI"; 
$cacheFolder = '././assets/cached/';
if(file_exists($cacheFolder.$q.".json")) {
$data = json_decode(file_get_contents($cacheFolder."".$q.".json"));
$msg = "cached";
//echo "<pre>";
//print_r($data);die;
return $data;

// echo '<iframe width="420" height="315"
// src="https://www.youtube.com/embed/AgiTrArkzcQ?autoplay=1&mute=1">
// </iframe>';
} else {
if(strlen($q)>5){
$gdata = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.urlencode(str_replace("-", "+", $q)).'&maxResults=' .$limit.'&key=' . $key);
}
$result =json_decode($gdata,true);
//print_r($result);die;
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
      array_push($mydata,$vresult);
}

//print_r($mydata);die;

$json = json_encode($mydata);
if (file_put_contents($cacheFolder.$q.".json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";


}
	}







}
