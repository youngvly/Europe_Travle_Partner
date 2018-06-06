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
    <link href="css/hover.css" rel="stylesheet">
    

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

    
	<div class="grid">
					<figure class="effect-layla">
						<img src="img/east-bg.jpg" />
						<figcaption>
							<h2><span>EAST</span> EURPOPE</h2>
							<p>동유럽여행 파트너를 찾아보세요</p>
							<a href="php/board/east_partner_board.php">View more</a>
						</figcaption>			
          </figure>
    </div>
    <div class="grid">
					<figure class="effect-layla">
						<img src="img/west-bg.jpg" />
            <figcaption>
							<h2><span>WEST</span> EURPOPE</h2>
							<p>서유럽여행 파트너를 찾아보세요</p>
							<a href="php/board/WEST_partner_board.php">View more</a>
						</figcaption>					
          </figure>
    </div>
    <div class="grid">
					<figure class="effect-layla">
						<img src="img/south-bg.jpg" />
						<figcaption>
							<h2><span>SOUTH</span> EURPOPE</h2>
							<p>남유럽여행 파트너를 찾아보세요</p>
							<a href="php/board/SOUTH_partner_board.php">View more</a>
						</figcaption>			
          </figure>
    </div>
    <div class="grid">
					<figure class="effect-layla">
						<img src="img/north-bg.jpg" />
            <figcaption>
							<h2><span>NORTH</span> EURPOPE</h2>
							<p>북유럽여행 파트너를 찾아보세요</p>
							<a href="php/board/NORTH_partner_board.php">View more</a>
						</figcaption>					
          </figure>
    </div>
 
 
    <nav id="foot"></nav>
       <script>
        $(document).ready(function(){

            $("#foot").load("/Europe_travel_partner/foot.html");

        });
      </script>
</div>

  </body>