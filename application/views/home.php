<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include"include/header.php";
?>
     <div class="body_contents">
        <?php 
        //echo"<pre>";
        //print_r($mydata);die;
        foreach ($mydata as $key => $value)
        {
          // print_r($value);
            echo '<h1 class="header">'.ucwords($value->title).'</h1>';
            $v=$this->db->query("SELECT * FROM sub_category WHERE c_id='$value->id'");
            $result=$v->result();
            foreach ($result as $key1 => $value1)
            {
                echo '  <div class="list"><a href="'.base_url($value1->json).'">'.ucwords($value1->title).'</a></div>';
            }
        }
        ?>
         <!-- <h1 class="header">Fresh New Videos</h1>
         <div class="list"><a href="#">Pasoori Shae Gill</a></div> -->
         <!-- <div class="list"><a href="#">Tek It Cafuneacute</a></div>
         <div class="list"><a href="#">sun and moon anees</a></div>
         <div class="list"><a href="#">Sufriendo MYLOslash</a></div>
         <div class="list"><a href="#">RAVE Dxrk</a></div>
         <div class="list"><a href="#">As It Was Harry Styles</a></div>
         <div class="list"><a href="#">EVA amp MIA GOKO</a></div>
         <div class="list"><a href="#">Bi039 Tek Ben Anlarm KOumlFN</a></div>
         <div class="list"><a href="#">Goumlkyuumlzuumlnuuml Tutamam Can Koccedil</a></div>
         <div class="list"><a href="#">Why Am I Like This Orla Gartland</a></div>
         <div class="list"><a href="#">Maher Goumlkhan Tuumlrkmen</a></div>
         <div class="list"><a href="#">A Man Without Love Engelbert Humperdinck</a></div>
         <div class="list"><a href="#">Me Chama de Amor Arrochadeira Remix O Tubaratildeo</a></div>
         <div class="list"><a href="#">Al Sevgilim Semicenk</a></div>
         <div class="list"><a href="#">Dicht im Flieger Julian Sommer</a></div>
         <div class="list"><a href="#">First Class Jack Harlow</a></div>
         <div class="list"><a href="#">Comedy Gen Hoshino</a></div>
         <div class="list"><a href="#">Until I Found You Stephen Sanchez</a></div>
         <div class="list"><a href="#">ULTRA SOLO Polimaacute Westcoast</a></div>
         <div class="list"><a href="#">Huapango Amor Ranchero La Humildad De La Musica Nortentildea</a></div>
         <div class="list"><a href="#">10 Things I Hate About You Leah Kate</a></div>
         <div class="list"><a href="#">Kwaku the Traveller Black Sherif</a></div>
         <div class="list"><a href="#">Good Looking Suki Waterhouse</a></div>
         <div class="list"><a href="#">Aulas e Cursos DNASTY</a></div>
         <div class="list"><a href="#">LOVE DIVE IVE</a></div>
         <div class="list"><a href="#">Se Acabo feat Method Man Remix The Beatnuts</a></div>
         <div class="list"><a href="#">Peri Cintaku Ziva Magnolya</a></div>
         <div class="list"><a href="#">ARRANCARMELO WOS</a></div>
         <div class="list"><a href="#">Slow Motion AMARIA BB</a></div>
         <div class="list"><a href="#">San Lucas Kevin Kaarl</a></div>
         <div class="list"><a href="#">Rainfall Tom Santa</a></div>
         <div class="list"><a href="#">Your Existence Wonstein</a></div>
         <div class="list"><a href="#">Love Me Back Fayahh Beat Trinidad Cardona</a></div>
         <div class="list"><a href="#">Un Viaje Jotaerre</a></div>
         <div class="list"><a href="#">Yaralarn Ben Saraym Berk Baysal</a></div>
         <div class="list"><a href="#">prolly my spookiest beat prodby668</a></div>
         <div class="list"><a href="#">All For You Cian Ducrot</a></div>
         <div class="list"><a href="#">Ferrari James Hype</a></div>
         <div class="list"><a href="#">Kafile Yuumlksek Sadakat</a></div>
         <div class="list"><a href="#">Vegas I Wanna Ride Joseline Hernandez</a></div> -->
      
      </div>
<?php
include"include/footer.php";
?>
