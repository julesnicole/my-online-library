<html>
<head>
 <title><?php echo "My Online Collection";?></title>
 <link rel="stylesheet" href="css/style.css" type="text/text/css">
</head>
<body>

 <div class="header">

   <div class="wrapper">

     <h1 class="branding-title"><a href="/"> My Online Collection</a></h1>

     <ul class="nav">
       <li class="books"<?php if(section =="books") {echo " on"; } ?>">
         <a href="catalog.php?cat=books">Books</a></li>
       <li class="movies"<?php if(section =="movies") {echo "on"; } ?>">
         <a href="catalog.php?cat=movies">movies</a></li>
       <li class="music"<?php if(section =="music") {echo "on"; } ?>">
         <a href="catalog.php?cat=music">music</a></li>
       <li class="suggest"<?php if(section =="music") {echo "on"; } ?>">
          <a href="suggest.php">suggest</a></li>
     </ul>

   </div>

 </div>

 <div id="content">
