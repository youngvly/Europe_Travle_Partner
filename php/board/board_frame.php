<html>
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
          extract($_GET);       //table = 테이블 이름   //i = 게시글출력수 //mode = search
          extract($_POST);  
          $scale = 5;    //한화면에 표시되는 글의 개수
          
        //PHP DB Connect init
        include "../dbConnect.php";

        if($mode=='search'){
            $sql="SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
            ,requiredPeople,engagedPeople,contents,hits,reg_date FROM $table";
            $sql.="_board WHERE country LIKE '%$searchCountry%' ORDER BY boardID desc";
            if($searchregion) $sql.="AND region LIKE'%$searchregion%' ";
            if($searchsubject) $sql.="AND region LIKE'%$searchsubject%' ";
            if($searchdate) $sql.="AND region LIKE'%$searchdate%' ";
        }else{
            //east_partner_board 게시판출력
            $sql = "SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
                    ,requiredPeople,engagedPeople,contents,hits,reg_date FROM $table";
            $sql .= "_board order by boardID desc";
        }

        
        $result = mysql_query($sql,$connect) or exit(mysql_error());
        $total_record = mysql_num_rows($result);        //전체 글의 개수

        if($total_record%$scale==0) $total_page=floor($total_record/$scale);
        else $total_page = floor($total_record/$scale)+1;       //전체 페이지개수 계산

        //표시할 페이지에 따라 start 계산
        if(!$page) $page = 1;
        $start = ($page-1)* $scale;
        $number = $total_page-$start;

    ?>
    <script>
    //아이디 중복체크 함수
    function child(table,boardID){
        document.getElementById('ifrm').style.height='120%';
        item.location.href="board_item.php?table="+table+"&boardID="+boardID; 
        }
    </script>
    </head>
    <body>
        <input type="hidden" id="page" value="<?=$page?>">
                    <!-- Main Content -->

    <div class="container" id="item">
    <iframe class="col-lg-8 col-md-10 mx-auto" src="" id="ifrm" scrolling=yes frameborder=no  height=0 name="item"></iframe>
    </div>
    <div class="container">
    <div class="row">
    <div class="searching pull-right">
        <form action="east_partner_board.php?mode=search" method="post">
            <span>주제</span>
            <select name="searchsubject">
                <option value="travel">관광</option>
                <option value="eat">식사</option>
                <option value="" selected> </option>
            </select>
            <!-- <button onclick="window.open('mapex.html','지역검색','width=430,height=500,location=no,status=no,scrollbars=yes');">지역선택</button> -->
            <span>국가</span><input id="showcountry" type="text" name="searchCountry" length="5">
            <span>지역</span><input id="showregion" type="text" name="searchregion" length="5">
            <span>희망날짜</span><input type="date" name="searchdate">
            <button type="submit" name="submitbt">검색</button> 
        </form>
    </div>
    </div> <!-- row -->
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p>
          <? 

          //게시판 목록출력
              for($i=$start;$i<$start+$scale & $i<$total_record; $i++){
                  mysql_data_seek($result,$i);      //레코드 지칭
                  $row = mysql_fetch_array($result);    //하나의 레코드 가져오기
                $boardID = $row['boardID'];
                echo('<div class="post-preview">');
                //echo("<a  data-toggle='collapse' href='#collapseExample$i'");
                echo("<a onclick=child('$table',$boardID) href='#ifrm' ");
                echo (' role="button" aria-expanded="false" aria-controls="collapseExample"></br>');
                //title
                echo('<h2 class="post-title">');
                echo("$row[title]");
                echo("</h2>");
                //subtitle
                echo('<h3 class="post-subtitle">');
                echo("$row[country] / $row[region] / $row[subject] / 희망 날짜 $row[4]");
                echo('</h3>');
                //username을 출력하기 위해 user DB와 연동 
                $sql = "SELECT name,id FROM user WHERE id IN ('$row[userID]')";
                $nameSQL = mysql_query($sql)or exit(mysql_error());
                if(!$nameSQL) echo"sql error";
                $namerow = mysql_fetch_array($nameSQL);

                echo('<p class="post-meta">Posted by <a href="#"> ');
                echo("$namerow[0]</a>  $row[reg_date]</p>");
                echo('</a></div>');
              ?>
              <!-- <div class='collapse' id='collapseExample<?=$i?>'></div>
                <script>
                    $(document).ready(function(){
                        $("#collapseExample<?=$i?>").load("board_item.php?table=<?=$table?>&boardID=<?=$boardID?>");
                    });
                    
                </script> -->
              <?}?> <!--게시판 출력 close-->

          <!-- Pager -->
          <div class="pager text-center">
            << 이전&nbsp;&nbsp;&nbsp;
            <?
                for($i=1;$i<=$total_page;$i++){
                    if($page == $i) echo("<b> $i </b>");
                    else echo("<a href='east_partner_board.php?page=$i'> $i </a>");
                }
                ?>
                &nbsp;&nbsp;&nbsp;다음 >>
                </div>


        </div>
      </div><!-- /row of main-->
     
    </div><!-- /container of main-->

    <!-- Bootstrap core JavaScript -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/clean-blog.min.js"></script>


    </body>
</html>