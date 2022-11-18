<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
?>
      <div class="body_contents">
        <h1 class="header">Anees Sun and Moon Lyrics Video</h1>
        <div class="thumbx overlayx player">
          <a class="pl-link" href="#">
            <img src="https://i.ytimg.com/vi_webp/o8cXBCABacs/hqdefault.webp" style="height: 100%; width: 100%;" alt="">
            <div class="playWrapperx"></div>
          </a>
        </div>
        <div class="lines">
          <b>File Name</b>: Anees Sun and Moon Lyrics.mp4
        </div>
        <div class="lines">
          <b>Definition</b>: <span style="background-color: rgb(51, 192, 1); color: #FFF; font-size: 14px; padding: 0px 2px 1px;border-radius: 3px;">HD</span>
        </div>
        <div class="lines">
          <b>Uploader</b>: Dan Music
        </div>
        <!-- <iframe width = "100%" height = "500px" src = "https://www.youtube-nocookie.com/embed/o8cXBCABacs?&rel=0&showinfo=0&autohide=1" frameborder = "0"
                          allowfullscreen> </iframe> -->
        <script>
          $(function() {
      $(".pl-link").click(function(){
       $(".player").removeClass("with-txt").addClass("yt-vd").html('<iframe width="100%" height="500px" src="https://www.youtube-nocookie.com/embed/o8cXBCABacs?&rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>')})
                        });
        </script>
        <div class="darea">
          <div id="txt">
            <button class="download">Download File</button>
          </div>
          <div id="wait" style="display:none; position:fixed;padding: 20px;top: 50%; left: 50%;margin-top: -50px; margin-left: -100px;border: 5px solid #129F05;background-color: #f3f3f3; -webkit-box-shadow: 1px 1px 50px 10px #000000;box-shadow: 1px 1px 70px 10px #000000;">
            <img src="<?php echo bse_url(); ?>assets/loading.gif" width="132" height="43" />
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
        <div class="header">Trending Now</div>
        <div class="list">
          <a href="/vision-videos-richard-allen/">Vision Videos Richard Allen</a>
        </div>
        <div class="list">
          <a href="/quinndoll/">Quinndoll</a>
        </div>
        <div class="list">
          <a href="/sunny-lion/">Sunny Lion</a>
        </div>
        <div class="list">
          <a href="/alicia-waldner/">Alicia Waldner</a>
        </div>
        <div class="list">
          <a href="/nude-sex/">Nude Sex</a>
        </div>
        <div class="list">
          <a href="/redwap-com/">Redwap Com</a>
        </div>
      </div>
<?php
include"include/footer.php";
?>