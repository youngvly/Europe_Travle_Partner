<html lang="en">

  <head>
    <?
      session_start();
      extract($_SESSION);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="css/additional.css" rel="stylesheet">
    

  </head>
  <body>
    <nav id="navv"></nav>
       <script>
        $(document).ready(function(){

            $("#navv").load("nav.php");

        });
      </script>

     <!-- Page Header -->
     <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>"유행"</h1>
              <span class="subheading">유럽여행 동행찾기</span>
              <span class="label" style="font-family: 'Nanum Myeongjo', serif;">여행은 누구와 함께 하느냐가 중요하다.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--East Menu-->
    <div class="mainmenu" style="background-image: url('img/east-bg.jpg')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="mainmenu2">



              <a class="subheading" href='php/board/east_partner_board.php' role="button" aria-controls= "true" >
              <center><h1>East</h1>동유럽</a></center>

            </div><!--site-heading-->
          </div><!--row-->
        </div><!--/container-->
      </div><!--overlay-->
    </div><!--mainmenu-->
    <!--WestMenu-->
    <div class="mainmenu" style="background-image: url('img/west-bg.jpg')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="mainmenu2">

              <a class="subheading" href='php/board/west_partner_boot.php' role="button" aria-controls= "true" >
              <center><h1>West</h1>서유럽</a></center>
            </div><!--site-heading-->
          </div><!--row-->
        </div><!--/container-->
      </div><!--overlay-->
    </div><!--mainmenu-->
    <!--NorthMenu-->
    <div class="mainmenu" style="background-image: url('img/north-bg.jpg')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="mainmenu2">

              <a class="subheading" href='php/board/North_partner_boot.php' role="button" aria-controls= "true" >
              <center><h1>North</h1>북유럽</a></center>
            </div><!--site-heading-->
          </div><!--row-->
        </div><!--/container-->
      </div><!--overlay-->
    </div><!--mainmenu-->

    <!--SouthMenu-->
    <div class="mainmenu" style="background-image: url('img/south-bg.jpg')">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="mainmenu2">

              <a class="subheading" href='php/board/South_partner_boot.php' role="button" aria-controls= "true" >
              <center><h1>South</h1>남유럽</a></center>
            </div><!--site-heading-->
          </div><!--row-->
        </div><!--/container-->
      </div><!--overlay-->
    </div><!--mainmenu-->
 
    <nav id="foot"></nav>
       <script>
        $(document).ready(function(){

            $("#foot").load("/Europe_travel_partner/foot.html");

        });
      </script>
</div>

  </body>