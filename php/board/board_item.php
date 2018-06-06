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
          
        //PHP DB Connect init
        include "../dbConnect.php";

        //east_partner_board 게시판출력
        $sql = "SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
                ,requiredPeople,engagedPeople,contents,hits,reg_date,latlng FROM $table";
        $sql .= "_board where boardID = '$boardID'";

        $result = mysql_query($sql,$connect) or exit(mysql_error());


        function uphits($hits, $boardID){
            $sql = "UPDATE $table";
            $sql .="_board SET hits = $hits+1 WHERE boardID = $boardID";                        
        }
    ?>
    </head>
    <body>
    <?  ;while($row = mysql_fetch_array($result)){ 
        $latlng = $row['latlng'];
        $boardID = $row['boardID'];?>
        <!--게시판 글,댓글출력-->

            <div class='card card-body'>  
            
            <table>
            <tr><td text-align='right'>조회수 :<?= $row['hits']?></td>
            <?
                if($userId == $row['userID']){
            ?>
                <td><a class="pull-right" href="delete_write.php?boardID=<?=$boardID?>&table=<?=$table?>">삭제</a>
                <a class="pull-right" onclick='window.parent.location.href="board_write.php?table=<?=$table?>&mode=edit&boardID=<?=$boardID?>"'>수정</a></td>
            <?}?>
        </tr>
            <tr><td colspan='3' height='150px'><?=$row['contents']?></td></tr>
            </table>
            <!-- 지도 정보가 있으면 지도출력 -->
            <?if($latlng) echo('<div id="map" style="height:200px;"> </div>')?>
                <script>
                    if(<?=$latlng?>){
                    var strings = "<?=$latlng?>".split(',');
                    
                    var lats = strings[0].substring(1,15);
                    var lngs = strings[1].substring(1,15);

                    $(document).ready(function(){
                        $("#map").load("showmap.php?lat="+lats+"&lng="+lngs);
                    });
                    }
                </script>
            <?
            //덧글 East_Partner_ripple 출력
               
                $psql = "SELECT * from $table";
                $psql .= "_ripple where boardID IN ('$boardID')";
                $presult = mysql_query($psql,$connect);

                while($prow = mysql_fetch_array($presult)){
                    //userID , name 연동
                    $sql = "SELECT name,id FROM user WHERE id IN ('$prow[userID]')";
                    $nameSQL = mysql_query($sql);
                    $namerow = mysql_fetch_array($nameSQL);
            ?>
            <div class = "container">
                <div class="row">
                <div class="col-sm-2">
                <div class="thumbnail">
                    <img style="max-height: 100%; max-width: 100%;margin:auto;display:block;object-fit:contain" class="" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" >
                </div><!-- /thumbnail-->
                </div><!-- /col-sm-1 -->

                <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <strong><?=$namerow[0]?></strong> <span class="text-muted"><?=$prow['reg_date']?></span>
                    <? if($userId == $prow['userID'])
                        echo("<a href='delete_ripple.php?ripID=$prow[ripID]&table=$table'>댓글삭제</a>")?>
                    </div>
                    <div class="panel-body">
                    <?=$prow['contents']?>
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
                </div>
            </div><!-- /container of 댓글출력-->
                <?
                    }   //ripple while close
                ?>
            <!--댓글 입력창 -->
            <div class = "container">
            <div class="row">
                <div class="col-sm-1">
                <!-- <div class="thumbnail">
                    <img style="max-height: 100%; max-width: 100%;margin:auto;display:block;object-fit:contain" class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail --> 
                </div><!-- /col-sm-1 -->
            <form name="RippleInput" id="rippleinputForm" action ="../board/insert_ripple.php" method="post" novalidate>
                <div class="col-sm-">
                <input type="hidden" name="boardID" value="<?=$row['boardID']?>">
                <?
                 $where = split('_',$table);
                ?>
                <input type="hidden" name="where" value="<?=$where[0]?>">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                    <label>댓글입력</label>
                    <input type="text" class="form-control" placeholder="댓글을 입력하세요" 
                        name="ripple_content" required data-validation-required-message="Please enter ripple">
                    <!-- <p class="help-block text-danger"></p> -->
                    </div>
                </div><!-- /control-group -->
                </div><!-- /col-sm-5 -->
                <div class="col-sm-2 pull-right">
                <button type="submit" class="btn btn-secondary" id="RippleButton">Enter</button>
                </div>
            </form>
            </div> <!-- row -->
            </div><!-- /container of 댓글입력-->

            </div><!-- /게시판 글출력 close-->
        <?}?>

        <!-- Bootstrap core JavaScript -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/clean-blog.min.js"></script>
    </body>
</html>