<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
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
    ?>
</head>
<body>

    <div id = "map"></div>
     <div id="findhotels">
      Find Meeting point
    </div>

    <div id="locationField">
      <input id="autocomplete" placeholder="Enter a city" type="text" />
    </div>

    <div id="controls">
    <select id="country">
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
 
        <table class="table table-bordered">
        <thead>
            <caption> 글쓰기 </caption>
        </thead>
        <tbody>
            <form action="write_ok.jsp" method="post" encType="multiplart/form-data">
                <tr>
                    <th>국가 지역</th>
                    <td><input type="text" readonly id="country">&nbsp; &nbsp;
                    <input type="text" readonly id="region"></td>

                </tr>
                <tr>
                    <th>주제 : </th>
                    <td>
                    <select class="selectpicker" name="subject" title="주제를 골라주세요">
                        <option>관광</option>
                        <option>식사</option>
                        <option>?</option>
                    </select>
                    <select class="selectpicker" name="subject" title="국가">
                        <option>관광</option>
                        <option>식사</option>
                        <option>?</option>
                    </select>
                    <select class="selectpicker" name="subject" title="주제를 골라주세요">
                        <option>관광</option>
                        <option>식사</option>
                        <option>?</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>제목: </th>
                    <td><input type="text" placeholder="제목을 입력하세요. " name="title" class="form-control"/></td>
                </tr>
                <tr>
                    <th>내용: </th>
                    <td><textarea cols="10" placeholder="내용을 입력하세요. " name="content" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th>첨부파일: </th>
                    <td><input type="text" placeholder="파일을 선택하세요. " name="filename" class="form-control"/></td>
                </tr>
                <tr>
                    <th>비밀번호: </th>
                    <td><input type="password" placeholder="비밀번호를 입력하세요" class="form-control"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="등록" onclick="sendData()" class="pull-right"/>
                        <input type="button" value="reset" class="pull-left"/>
                        <input type="button" value="글 목록으로... " class="pull-right" onclick="javascript:location.href='list.jsp'"/>
                        <!-- <a class="btn btn-default" onclick="sendData()"> 등록 </a>
                        <a class="btn btn-default" type="reset"> reset </a>
                        <a class="btn btn-default" onclick="javascript:location.href='list.jsp'">글 목록으로...</a> -->
                    </td>
                </tr>
            </form>
        </tbody>
        </table>
        </div>
        </div>
    </div>
    <script>
     document.getElementById('country').value="hi";
    $(document).ready(function(){

        $("#map").load("mapex.html");

    });

</script>
</body>
