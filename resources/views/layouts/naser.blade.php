<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Petromin Calendar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/_media.css">
    <link rel="stylesheet" href="css/ore.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
     <link rel="stylesheet" href="fonts/Source_Sans_Pro/SourceSansPro-Light.ttf">
      <!-- our project just needs Font Awesome Solid + Brands -->
  <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="css/fontawesome/css/brands.css" rel="stylesheet">
  <link href="css/fontawesome/css/solid.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">                                                                                  </script>
</head>
<style>
  .navbar {
    --mdb-navbar-box-shadow: 0 4px 12px 0 rgba(0,0,0,0.07),0 2px 4px rgba(0,0,0,0.05);
    /* --mdb-navbar-padding-top: 0.5625rem; */
    /* --mdb-navbar-brand-img-margin-right: 0.25rem; */
    box-shadow: var(--mdb-navbar-box-shadow);
    padding-top: var(--mdb-navbar-padding-top);
    background: #D02128;
    color: #fff;
}
.navbar-light .navbar-brand {
    /* color: rgba(0,0,0,.9); */
    color: #fff;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #fff;
}
</style>
<body>
     <!-- Section: Design Block -->
     <section class="background-radial-gradient overflow-hidden">
        <style>
          .background-radial-gradient {
            /* background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
              radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%); */
                background-color: #DD042B;
          }

          /* #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          } */
          #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient( #fff , #ffffffd6);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#fff, #ffffffd6);
            overflow: hidden;
          }

          .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
          }
        </style>
@yield('content')
        </section>
  <!-- Section: Design Block -->
 </body>

<script src="test.js"></script>

<script>
$(document).ready(function(){
          $(".alert").slideDown(300).delay(5000).slideUp(300);
    });
 </script>
<!-- <script src="js/content.js"></script>
<script src="js/contentScript.js"></script>
<script src="js/main.min.js"></script>
<script src="js/main.js"></script> -->

<!-- <script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/main.min.js"></script> -->
<!-- <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/search/search.min.js"></script> -->
<!-- <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/mdb5/standard/core.min.js"></script> -->
</html>