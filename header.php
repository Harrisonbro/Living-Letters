<?php include('includes.php'); ?>
<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    
  <title>Living Letters</title>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Apple touch icons. See http://mathiasbynens.be/notes/touch-icons -->
  <link rel="apple-touch-icon-precomposed" href="<?=SITE_IMAGES?>/apple-touch-icon-152x152-precomposed.png">
  <!-- Favicons. See http://www.jonathantneal.com/blog/understand-the-favicon/ -->
  <link rel="icon" href="<?=SITE_IMAGES?>/favicon.png">
  <!--[if IE]>
    <link rel="shortcut icon" href="<?=SITE_IMAGES?>/favicon.ico"/>
  <![endif]-->
  <meta name="msapplication-TileColor" content="#D83434">
  <meta name="msapplication-TileImage" content="<?=SITE_IMAGES?>/tileicon.png">
  
  <!-- Prevent some browsers (eg. Chrome) attempting to pre-fetch all URLs on your page -->
  <!-- See: http://www.buyog.com/code/?id=53 -->
  <meta http-equiv="x-dns-prefetch-control" content="off">

  <link rel="stylesheet" href="css/all.css">

  <!-- Inline critical, blocking javascripts to reduce HTTP requests -->
  <script>
    <?php require(SITE_JS_PATH.'/typekit.js'); ?>
    <?php //require(SITE_JS_PATH.'/modernizr.custom.js'); ?>
  </script>
    
</head>
<body>

  <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="header">
    <div class="container">
      <h1 class="header__logo">
        <a href="<?=SITE_URI?>">Living&nbsp;Letters</a>
      </h1>
      <nav>
        <ul class="header__nav">
          <li>
            <a href="<?=SITE_URI?>/about.php">About</a>
          </li>
        </ul>
      </nav>
    </div><!-- .container -->
  </header>