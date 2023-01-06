<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="commententertainment"){
    include("include/commententertainment.php");
  }
  else if($include=="commentbusiness"){
    include("include/commentbusiness.php");
  }
  else if($include=="commenttravel"){
    include("include/commenttravel.php");
  }
  else if($include=="commentlifestyle"){
    include("include/commentlifestyle.php");
  }
  else if($include=="comment"){
    include("include/comment.php");
}
}
?>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
      ?>
<?php      
    if($include=="entertainment1"){
            include("include/entertainment1.php");
          }else if($include=="entertainmentisi"){
            include("include/entertainmentisi.php");
          }else if($include=="businessisi"){
            include("include/businessisi.php");
          }else if($include=="beritaisi"){
            include("include/beritaisi.php");
          }else if($include=="travelisi"){
            include("include/travelisi.php");
          }else if($include=="lifestyleisi"){
            include("include/lifestyleisi.php");
          }else if($include=="lifestyle1"){
            include("include/lifestyle1.php");
          }else if($include=="travel1"){
            include("include/travel1.php");
          }else if($include=="business1"){
            include("include/business1.php");
          }else if($include=="sidebar"){
            include("include/sidebar.php");
          }else if($include=="video"){
            include("include/video.php");
        }
    }

    ?>