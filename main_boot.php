<html lang="en">

  <head>
    <?
      session_start();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="main_boot.php">유럽여행 동행찾기</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="main_boot.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EAST(동)
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">REVIEW</a>
                <a class="dropdown-item" href="php/board/east_partner_boot.php">PARTNER</a>
<!--                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                WEST(서)
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">REVIEW</a>
                <a class="dropdown-item" href="#">PARTNER</a>
<!--                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NORTH(북)
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">REVIEW</a>
                <a class="dropdown-item" href="#">PARTNER</a>
<!--                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SOUTH(남)
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">REVIEW</a>
                <a class="dropdown-item" href="#">PARTNER</a>
<!--                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
            <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
              <a class="nav-link" href="PHP/login/login.php">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
              
              <a class="subheading" data-toggle='collapse' href='#collapse-east'
              role="button" aria-expanded="false" aria-controls="collapse-east" >
              <h1>East</h1>동유럽</a>
              <!--접히는 메뉴-->
              <div class='collapse' id='collapse-east' >
                    <div class='card card-body' style="background-color: rgba( 255, 255, 255, 0.2 )">
                      <a></a>  
                    </div>
              </div><!--collapse-->
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
              <h1>West</h1>
              <a class="subheading" data-toggle='collapse' href='#collapse-east'
              role="button" aria-expanded="false" aria-controls="collapse-east" >서유럽</a>
              <!--접히는 메뉴-->
              <div class='collapse' id='collapse-east' >
                    <div class='card card-body' style="background-color: rgba( 255, 255, 255, 0.2 )">
                      <a></a>  
                    </div>
              </div><!--collapse-->
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
              <h1>North</h1>
              <a class="subheading" data-toggle='collapse' href='#collapse-east'
              role="button" aria-expanded="false" aria-controls="collapse-east" >북유럽</a>
              <!--접히는 메뉴-->
              <div class='collapse' id='collapse-east' >
                    <div class='card card-body' style="background-color: rgba( 255, 255, 255, 0.2 )">
                      <a></a>  
                    </div>
              </div><!--collapse-->
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
              <h1>South</h1>
              <a class="subheading" data-toggle='collapse' href='#collapse-east'
              role="button" aria-expanded="false" aria-controls="collapse-east" >남유럽</a>
              <!--접히는 메뉴-->
              <div class='collapse' id='collapse-east' >
                    <div class='card card-body' style="background-color: rgba( 255, 255, 255, 0.2 )">
                      <a></a>  
                    </div>
              </div><!--collapse-->
            </div><!--site-heading-->
          </div><!--row-->
        </div><!--/container-->
      </div><!--overlay-->
    </div><!--mainmenu-->
</div>
  </body>