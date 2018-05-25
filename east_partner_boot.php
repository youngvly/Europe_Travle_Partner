<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <? //PHP DB Connect init
        ini_set('display_errors','On');

        $connect = mysql_connect('localhost','root','123456');
        if(!$connect) echo "데이터베이스 연결 실패";
        mysql_select_db('Europe_travle_Partner',$connect);

        //east_partner_board 게시판출력
        $sql = "SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
                ,requiredPeople,engagedPeople,contents,hits,reg_date FROM east_partner_board ";
        
        $result = mysql_query($sql,$connect);
        $click =1;
    ?>
  </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
              <h1>EAST EUROPE</h1>
              <span class="subheading">동유럽 여행 동행 게시판</span>
            </div>
          </div>
        </div>
      </div>
    </header>
            <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p>


                <? //게시판 목록출력
                    while($row = mysql_fetch_array($result)){
                        echo('<div class="post-preview">');
                        echo("<a onclick='$click=$row[boardID]'");
                        echo('data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"">');
                        //title
                        echo('<h2 class="post-title">');
                        echo("$row[title]");
                        echo("</h2>");
                        //subtitle
                        echo('<h3 class="post-subtitle">');
                        echo("$row[country] / $row[region] / $row[subject] / 희망 날짜 $row[4]");
                        echo('</h3>');
                        //username을 출력하기 위해 user DB와 연동 
                        $sql = "SELECT name,userID FROM user WHERE userID IN ($row[6])";
                        $nameSQL = mysql_query($sql);
                        if(!$nameSQL) echo"sql error";
                        $namerow = mysql_fetch_array($nameSQL);

                        echo('<p class="post-meta">Posted by <a href="#"> ');
                        echo("$namerow[0]</a>$row[reg_date]</p>");
                        echo('</a></div>');
                        
                    }
                    
                ?>

                <?
                    //게시판 글출력
                    $sql = "SELECT * from east_partner_board where boardID = $click";
                    $result = mysql_query($sql,$connect);
                    $row = mysql_fetch_array($result);
                    $sql = "SELECT name,userID FROM user WHERE userID IN ($row[userID])";
                    $nameSQL = mysql_query($sql);
                    $namerow = mysql_fetch_array($nameSQL);

                    echo('<div class="collapse" id="collapseExample"+"$click">
                        <div class="card card-body">');              
                        echo("<table>");
                       // echo "<tr><td colspan='3'><h4>$row[subject]</h4><h3 align='center'>$row[title]</h3></td></tr>";
                        echo("<tr><td>작성자 : $namerow[name]</td><td>작성일 : $row[reg_date]</td><td>조회수 : $row[hits]</td></tr>");
                        echo ("<tr><td>국가 : $row[country]</td><td>지역 : $row[region]</td><td>인원 : $row[engagedPeople]/$row[requiredPeople]</td></tr>");
                        echo ("<tr><td colspan='3'>희망 날짜 : $row[app_date]</td></tr>");
                        echo("<tr><td colspan='3' height='200px'>$row[contents]</td></tr>");
                    echo('</table></div></div>');
                    
                ?>
                    
                </div>

          <hr>
          <!-- <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2018</p>
          </div> -->
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
 <!-- Footer -->
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    </body>
</html>