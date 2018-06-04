<html lang="en" integrity="">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

    <div class="write">
        <div class ="container-fluid">
            <div class="row">
                <div id="map" class=".col-xs-6 col-md-6" display:block;></div>
                <div class="col-xs-6 col-md-6">
                    <div class="row">
                    <!--국가 선택-->
                    <div id="controls">
                    <select id="country">
                        <option value="all">All</option>
                        <option value="ru">러시아</option>
                        <option value="ua">우크라이나</option>
                        <option value="fr">조지아</option>
                        <option value="pl">폴란드</option>
                        <option value="cs">체코</option>
                        <option value="nz">슬로바키아</option>
                        <option value="SI">슬로베니아</option>
                        <option value="hu">헝가리</option>
                        <option value="ro">루마니아</option>
                        <option value="hr">크로아티아</option>
                        <option value="bg" selected>불가리아</option>
                    </select>
                    </div>
                <div style="display: none">
      <div id="info-content">
        <table>
          <tr id="iw-url-row" class="iw_table_row">
            <td id="iw-icon" class="iw_table_icon"></td>
            <td id="iw-url"></td>
          </tr>
          <tr id="iw-address-row" class="iw_table_row">
            <td class="iw_attribute_name">Address:</td>
            <td id="iw-address"></td>
          </tr>
          <tr id="iw-phone-row" class="iw_table_row">
            <td class="iw_attribute_name">Telephone:</td>
            <td id="iw-phone"></td>
          </tr>
          <tr id="iw-rating-row" class="iw_table_row">
            <td class="iw_attribute_name">Rating:</td>
            <td id="iw-rating"></td>
          </tr>
          <tr id="iw-website-row" class="iw_table_row">
            <td class="iw_attribute_name">Website:</td>
            <td id="iw-website"></td>
          </tr>
        </table>
      </div>
    </div>
                    <button id="getLocation" type="button" class="btn btn-primary btn-sm">위치 정보 수집</button>
                    </div>
                    <!--find place-->
                    <input type="text" id="query" >
                    <button id="findbt" class="btn btn-secondary btn-sm">Search</button>
                    <div class="list-group" id="resultList">
                        <!-- <a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a> -->
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        
                    </div>
                </div>
            </div>
            <div class="row">

           <table class="table table-bordered">
            <thead>
                <caption> 글쓰기 </caption>
            </thead>
            <tbody>
                <form action="write_ok.jsp" method="post" encType="multiplart/form-data">
                    <tr>
                        <th>국가 지역</th>
                        <td><input type="text" readonly name="country">&nbsp; &nbsp;
                        <input type="text" readonly name="region"></td>

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
</body>
<script>
    var map;
    var query;
    var mylat = {lat: -25.363, lng: 131.044};
    var placeresult;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
        center: mylat,
        zoom: 8
        });
        var marker = new google.maps.Marker({
            position:  mylat,
            map: map,
            title: 'Hello World!'
        });
        
        //검색버튼
        document.getElementById("findbt").onclick = function() {
            var enteredQuery = document.getElementById('query').value;
            $("#resultList").empty();
            console.log(enteredQuery);
            type = enteredQuery;

            service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: mylat,
                radius: 500000000,
                query : type
            }, processResults);
        }
      

        infoWindow = new google.maps.InfoWindow({map: map}); 
        infoWindow.setContent('Your location');

    }
  
    //사용자 위치가져오기 성공/실패
    function successCallback(position) { 
        let pos = { lat: position.coords.latitude, lng: position.coords.longitude };
        mylat = pos;
        infoWindow.setPosition(pos); map.setCenter(pos); 
        alert("Your current position is: latitude(" + pos.lat + "), longitude(" + pos.lng + ")"); 
    }
    function errorCallback(error) { alert("Error: " + error.message); }

    //위치정보수집
    document.getElementById("getLocation").onclick = function () { 
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback); 
    };

    
    //검색쿼리정보 가져왔으면 출력
   function processResults(results, status, pagination) {
    if (status !== google.maps.places.PlacesServiceStatus.OK) {
        return;
    } else {
        showList(results);

        /* if (pagination.hasNextPage) {
        var moreButton = document.getElementById('more');

        moreButton.disabled = false;

        moreButton.addEventListener('click', function() {
            moreButton.disabled = true;
            pagination.nextPage();
        });
        } */
    }
    }
    function showList(places) {
        var bounds = new google.maps.LatLngBounds();
        var placesList = document.getElementById('resultList');
        

        for (var i = 0, place; place = places[i]; i++) {
            placesList.innerHTML += 
            '<a class="list-group-item list-group-item-action" onclick="placeresult='+place.country+'">' 
            + place.name + '</a>';

            bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
        console.log(placeresult);
    }   


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUxqeM58aJDQn7dRClt3BjXjxgZYkMd8Q&callback=initMap&libraries=places"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUxqeM58aJDQn7dRClt3BjXjxgZYkMd8Q&libraries=places"></script> -->
</html>