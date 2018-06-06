<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Custom fonts for this template -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">
    <link href="../../css/additional.css" rel="stylesheet">
    <? 
        //session_start()
          session_start();
          extract($_SESSION);
          extract($_GET);
          extract($_POST);

          if(!$page) $page=1;
    ?>
  </head>
    <body>
      <nav id="navv"></nav>
       <script>
        $(document).ready(function(){

            $("#navv").load("../../nav.php");

        });
      </script>
    
     <!-- Page Header -->
     <header class="masthead" style="background-image: url('../../img/north-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>NORTH EUROPE</h1>
              <span class="subheading">북유럽 여행 동행 게시판</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id = "mainboard"></div>
    <script>

        $(document).ready(function(){
            $("#mainboard").load("../board/board_frame.php?table=north_partner&page=<?=$page?>&mode=<?=$mode?>&searchCountry=<?=$searchCountry?>&searchregion=<?$searchregion?>&searchdate=<?$searchdate?>&searchsubject=<?$searchsubject?>");

        });

      </script> 
     <div class="clearfix col-lg-8 col-md-10 mx-auto">
            <a class="btn btn-primary float-right" href="board_write.php?table=north_partner">글쓰기 &rarr;</a>
      </div>       


    <nav id="foot"></nav>
       <script>
        $(document).ready(function(){

            $("#foot").load("/Europe_travel_partner/foot.html");

        });
      </script>

    <!-- Bootstrap core JavaScript -->
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/clean-blog.min.js"></script>
    </body>
</html>