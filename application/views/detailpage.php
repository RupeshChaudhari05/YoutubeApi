<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
$cacheFolder = '././assets/cached/';
$searchdata =$this->uri->segment('3');
//print_r($cat);die;
if(file_exists($cacheFolder.$searchdata.".json")) {
	//echo"ffff";die;
$data1 = json_decode(file_get_contents($cacheFolder."".$searchdata.".json"));
$d= array();
foreach ($data1 as $key => $value) {
if ($value->videoId===$vid) {
  array_push($d,$value);
}
}
}
?>
      <div class="body_contents">
        <h1 class="header"><?php echo ucfirst($d[0]->title); ?></h1>
        <div class="thumbx overlayx player">
          <a class="pl-link" href="#">
            <img src="<?php echo ucfirst($d[0]->image_high); ?>" style="height: 100%; width: 100%;" alt="<?php echo ucfirst($d[0]->title); ?>">
            <div class="playWrapperx"></div>
          </a>
        </div>
        <div class="lines">
          <b>File Name</b>: <?php echo ucfirst($d[0]->title); ?>.mp4
        </div>
        <div class="lines">
          <b>Definition</b>: <span style="background-color: rgb(51, 192, 1); color: #FFF; font-size: 14px; padding: 0px 2px 1px;border-radius: 3px;">HD</span>
        </div>
        <div class="lines">
          <b>Uploader</b>: <?php echo ucfirst($d[0]->channelTitle); ?>
        </div>
        <!-- <iframe width = "100%" height = "500px" src = "https://www.youtube-nocookie.com/embed/o8cXBCABacs?&rel=0&showinfo=0&autohide=1" frameborder = "0"
                          allowfullscreen> </iframe> -->
        <script>
          $(function() {
      $(".pl-link").click(function(){
       $(".player").removeClass("with-txt").addClass("yt-vd").html('<iframe width="100%" height="500px" src="https://www.youtube-nocookie.com/embed/<?php echo $vid; ?>?&rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>')})
                        });
        </script>
        <div class="darea">
          <div id="txt">
            <button class="download">Download File</button>
          </div>
          <div id="wait" style="display:none; position:fixed;padding: 20px;top: 50%; left: 50%;margin-top: -50px; margin-left: -100px;border: 5px solid #129F05;background-color: #f3f3f3; -webkit-box-shadow: 1px 1px 50px 10px #000000;box-shadow: 1px 1px 70px 10px #000000;">
            <img src="<?php echo base_url(); ?>assets/loading.gif" width="132" height="43" />
          </div>
        </div>
        <script>
          $(document).ready(function() {
            $(document).ajaxStart(function() {
              $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function() {
              $("#wait").css("display", "none");
            });
            $("button").click(function() {
              $("#txt").load("//y2a.xyz/hash/o8cXBCABacs");
            });
          });
        </script>
      </div>
<?php
include"include/footer.php";
?>