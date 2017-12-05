<?php
include("inc/data.php");
include("inc/funtion.php");
$pagetitle= "full catalog";
$section = null;

if (isset($_GET("cat"])) {
  if($_GET("cat"]== "books") {
    $pageTitle = "books";
    $section ="books";
  } else if ($_GET["cat"]== "movies") {
    $pageTitle = "movies";
    $section = "movies";
  } else if ($_GET["cat"]== "music") {
    $pageTitle = "music";
    $section ="music";

  }
}

include("inc/header.php"); ?>

<div class="section catalog page">

   <div class="wrapper">

   <h1><?php
     if(section !=null) {
       echo "<a href='catalog.php'>full catalog</a> &gt; ";
     }
      echo $pagetitle; ?</h1>

       <ul class="items">
        <?php
         $categories= array_category($category,$section);
         foreach($categories as $id) {
           echo get_item_html($id,$catalog[$id]);
         }

      ?>
    </ul>

  </div>

</div>


 <?php include("inc/footer.php"); ?>
