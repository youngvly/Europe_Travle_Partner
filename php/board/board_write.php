<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Custom fonts for this template -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    
    <!--google map-->
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
       #map {
           width : 50%;
            height: 50%;
        } 
    </style>
    
    <? 
          session_start();
          extract($_SESSION);
          extract($_GET);
          
            if(!$userId){
                echo("
                    <script>
                        window.alert('로그인 후 이용하세요.');
                        history.go(-1);
                        console.log($ripple_content);
                    </script>
                ");
                exit;
            };
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
     <header class="masthead" style="background-color:#17a2b8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>게시글 작성</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-md-10 mx-auto px-10">
        <div id = "mainboard"></div>
        <div id = "map" class="mx-auto "></div>
        <div id="findhotels">
        
        </div>
        <div class="row col-lg-5 col-md-10 mx-auto py-3">
            <div id="locationField">
            <input class="form-control"id="autocomplete" placeholder="Enter a city" type="text" />
            </div>

            <div id="controls">
            <select id="country"class="form-control">
                    <option value="all">All</option>
                    <option value="ru">러시아</option>
                    <option value="fr">조지아</option>
                    <option value="pl">폴란드</option>
                    <option value="cs" selected>체코</option>
                    <option value="nz">슬로바키아</option>
                    <option value="si">슬로베니아</option>
                    <option value="hu">헝가리</option>
                    <option value="ro">루마니아</option>
                    <option value="hr">크로아티아</option>
                    <option value="bg" >불가리아</option>
            </select>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto px-10">
        <table class="table table-bordered ">

        <tbody>
            <?
            if($mode !='edit') echo('<form action="insert_write.php" method="post" >');
            else echo("<form action='edit_write.php?boardID=$boardID' method='post' >");
            $where = split('_',$table);
            ?>
            <form action="insert_write.php" method="post" >
                <input type="hidden" name="where" value="<?=$where[0]?>">
                <tr>
                    <th>국가 지역</th>
                    <td><input class="form-control"type="text" readonly name="country" id="showcountry">&nbsp; &nbsp;
                    <input class="form-control"type="text" readonly name="region" id="showregion">
                    <input type="hidden" id="latlng" name="latlng" value=""></td>
                    
                </tr>
                <tr>
                    <th>주제 : </th>
                    <td>
                    <select class="form-control selectpicker" id = "subject" name="subject" title="주제를 골라주세요">
                        <option value="관광">관광</option>
                        <option value="식사">식사</option>
                        <option>?</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>제목: </th>
                    <td><input type="text" placeholder="제목을 입력하세요. " id="title" name="title" class="form-control"/></td>
                </tr>
                <tr>
                    <th>내용: </th>
                    <td><textarea cols="10" placeholder="내용을 입력하세요. " id="content" name="content" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th>약속 날짜 및 시간</th>
                    <td><input type="date" id="app_date" name="date" class="form-control">
                    <input type="time" id="app_time" name="time" class="form-control"></td>
                </tr>
                <tr>
                    <th>인원 </th>
                    <td><input class="form-control"type="text" id="ep" placeholder="현재인원" name="engagedPeople" length="4"/> &nbsp; &nbsp;
                    <input class="form-control"type="text" id="rp" placeholder="모집인원" name="requiredPeople"/></td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <?
                        if($mode!= 'edit') echo('<input class="btn btn-primary float-right"type="submit" value="등록" class="pull-right"/>');
                        else echo('<input class="btn btn-primary float-right" type="submit" value="수정" class="pull-right"/>');
                        ?>
                        
                        <input class="btn btn-primary float-right"type="button" value="reset" class="pull-left"/>
                        <input class="btn btn-primary float-right"type="button" value="글 목록으로... " class="pull-right" href="<?=$where[0]?>_partner_board.php"/>
                        <!-- <a class="btn btn-default" onclick="sendData()"> 등록 </a>
                        <a class="btn btn-default" type="reset"> reset </a>
                        <a class="btn btn-default" onclick="javascript:location.href='list.jsp'">글 목록으로...</a> -->
                    </td>
                </tr>
            </form>
        </tbody>
        </table>
        </div><!--px-->
        </div>
        </div>
    </div>
     <!-- //controll edit mode -->
     <?
        if($mode == 'edit'){
        include '../dbConnect.php';
    
        $sql = "SELECT * FROM $table"."_board WHERE boardID = $boardID";
        $result = mysql_query($sql) or exit(mysql_error());
        $row = mysql_fetch_array($result);
        
    ?>
    <script>
        document.getElementById('subject').value = '<?=$row['subject']?>';
        document.getElementById('title').value = '<?=$row['title']?>';
        document.getElementById('showcountry').value = '<?=$row['country']?>';
        document.getElementById('showregion').value = '<?=$row['region']?>';
        document.getElementById('content').value = '<?=$row['contents']?>';
        document.getElementById('app_date').value = '<?=$row['app_date']?>'.substring(0,10);
        document.getElementById('app_time').value = '<?=$row['app_date']?>'.substring(11,16);
        document.getElementById('rp').value = '<?=$row['requiredPeople']?>';
        document.getElementById('ep').value = '<?=$row['engagedPeople']?>';
        document.getElementById('latlng').value = '<?=$row['latlng']?>';
    </script>

    <?}?>
    <script>
    $(document).ready(function(){
        $("#map").load("mapex.html");
    });
</script>
    <!-- Bootstrap core JavaScript -->
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/clean-blog.min.js"></script>
</body>
