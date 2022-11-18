<?php



error_reporting(0);

$q = 'love song';
$limit=25;
$key = "AIzaSyArfpct_3h4U4gubXYE7Gcojvrbpv_swrI"; 
$cacheFolder = 'cached/';
if(file_exists($cacheFolder.$q.".json")) {
$data = json_decode(file_get_contents("cached/".$q.".json"));
$msg = "cached";
echo "<pre>";
print_r($data);
echo '<iframe width="420" height="315"
src="https://www.youtube.com/embed/AgiTrArkzcQ?autoplay=1&mute=1">
</iframe>';
} else {
//$msg "not cached";
if(strlen($q)>5){
$gdata = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.urlencode(str_replace("-", "+", $q)).'&maxResults=' .$limit.'&key=' . $key);
}

$result =json_decode($gdata,true);
//print_r($result);die;
$vresult=array();
echo "<pre>";
foreach($result['items'] as $item){
    //$vresult['title']= $item[snippet][publishedAt];
    //   $vresult['date']=$item[snippet][publishedAt];
    //   $vresult['title']=$item[snippet][title];
    //   $vresult['description']= $item[snippet][description] ;
                       $vresult['data']=$item;   
    //print_r($item);
}
$json = json_encode($result['items']);
if (file_put_contents($cacheFolder.$q.".json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";


}
