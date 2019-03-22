<?php
$root = '/';
echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lessons - Txaweyä Kelutral</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="' . $root . 'css/materialize.css" media="screen,projection"/>
    <!--Custom stylesheet-->
    <link type="text/css" rel="stylesheet" href="' . $root . 'css/style.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header>
      <!-- Regular navbar -->
      <nav class="nav-extended">
        <div class="nav-wrapper light-blue">
          <a href="' . $root . 'index.php" class="brand-logo">Txaweyä Kelutral</a>
          <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="' . $root . 'lessons/index.php">Lessons</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Fun Stuff >_></a></li>
          </ul>
        </div>
        <!-- <div class="nav-content deep-purple">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#">Pronunciation</a></li>
            <li class="tab"><a href="#">Your First Sentences</a></li>
            <li class="tab disabled">Nothing to See Here >_></li>
          </ul>
        </div> -->
      </nav>
      <!-- Mobile version of navbar -->
        <ul class="sidenav" id="mobile">
          <li><a href="' . $root . 'lessons/index.php">Lessons</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Fun Stuff >_></a></li>
        </ul>
    </header>
    <main>
      <div class="container">
        <div id="page-content-div">';
?>
