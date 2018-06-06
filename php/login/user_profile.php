<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../../js/hashtag.js"></script>
    <link href="../../css/login.css" rel="stylesheet" type="text/css">
    <?
        include '../dbConnect.php';
        session_start();
        extract ($_SESSION);
        extract ($_GET);
        
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $result = mysql_query($sql) or exit(mysql_error());
        $row = mysql_fetch_array($result);
        $age = (int)date("Y") - $row['age'];
        if($age<10) $level = "children";
        else if ($age<20) $level = "student";
        else if ($age<50) $level = "adult";
        else $level = "silver";
    ?>
    <script>var valuestr = "여행취향";</script>
    <?  
        $sqls = "SELECT * from traveltype where userID='$id'";
        $results = mysql_query($sqls);
        $rows = mysql_fetch_array($results);
        $lists = array("photo","food","shopping","plan","walk","ride","naturals","city","silence","crowd");
        foreach($lists as $l){
            if($rows["$l"]){
                echo("<script>
                    valuestr += ','+'$l';
                </script>");
            }
        }
    ?>
    <style>
    input:focus{
    outline: none;
    }

    </style>
    <script>
    var tagsinput = $('#hash').next();
        tagsinput.removeClass('bootstrap-tagsinput');
        tagsinput.find("input").remove();
        tagsinput.css("padding-bottom", "10px");
    </script>
</head>
<body>
<div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?=$row['name']?></h2>
                            <p>an   <b><?=$level?></b></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>
                            <?=$row['id']?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>
                            <?=$row['email']?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-12 col-xs-6 tital py-3" ><?=$row['intro']?></div>
                          <div class="col-sm-12 col-xs-6 tital py-3">
                            <input  id="hash" value="" data-role="tagsinput" disabled style="outline: none;">
                            </div>
                      </div>

                      
                </div>  <!--row-->

                <div class="row">
                    <hr>
                    <div class="container text-center">
                    <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">작성한 글</div>

                        <!-- Table -->
                        <table class="table">
                            <tr><th>주제</th><th>제목</th><th>국가</th><th>작성일</th></tr>
                        <?
                            $dir = array("East","west","south","north");
                            foreach($dir as $d){
                                $sql = "SELECT * FROM $d"."_PARTNER_BOARD WHERE userID = '$id' ORDER BY boardID desc";
                                $result = mysql_query($sql) or exit(mysql_error());
                                if (mysql_num_rows($result)){
                                    while($row = mysql_fetch_array($result)){
                                    echo("<tr><td>$row[subject]</td><td>
                                        <a href='../board/board_item.php?table=$d"."_partner&boardID=$row[boardID]'> $row[title]</a></td> 
                                        <td>$row[country]</td> <td>$row[reg_date]</td></tr>");
                                    }
                                };
                        }

                        ?>
                        </table>
                    </div>
                    </div>

                    </div>
                </div>
                </div>

                
            </div>
            </div>
            <script>
        document.getElementById('hash').value=valuestr;
    </script>
</body>
</html>