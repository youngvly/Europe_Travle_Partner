<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <!-- Custom fonts for this template -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <?    
    session_start();
    extract($_SESSION);
    extract($_GET);
    include '../dbConnect.php';
    
    $sql = "SELECT * FROM user WHERE id='$userId'";
    $result = mysql_query($sql)or exit(mysql_error());
    $row = mysql_fetch_array($result);
    $intro = str_replace(array("\r","\n"),' ',$row['intro']);

    ?>

  </head>
  <body>
  
  <div class="container">
            <form class="form-horizontal" role="form"  action="edit_profile_action.php" method="post">
                <center><h2> ◎ 정보 수정 ◎ </h2></center>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">이름</label>
                    <div class="col-sm-6">
                        <input type="text" name ="name"id="name" placeholder="이름을 입력하세요" class="form-control" autofocus>
                   </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">기존 비밀번호</label>
                    <div class="col-sm-4">
                        <input  id="pw" name="password1" type="password"  placeholder="비밀번호를 입력하세요." class="form-control" required>
                    </div>
                    <div class="col-sm-2">
                              <button type="button" id="checkbt" class="btn btn-primary btn-block">비밀번호 확인</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">변경할 비밀번호</label>
                    <div class="col-sm-6">
                        <input v-model="pass1" name="password2" type="password"  placeholder="비밀번호를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">변경할 비밀번호 확인</label>
                    <div class="col-sm-6">   
                            <input v-model="pass2" name="password2" type="password"  placeholder="비밀번호를 재입력하세요." class="form-control">
                         <!--비밀번호 확인 다름 알림-->
                            <span v-if="pass1 != pass2">비밀번호 확인란을 재입력해주세요.</span> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">생년월일</label>
                    <div class="col-sm-6">
                        <input type="date" id="bday" name = "bday" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">주소</label>
                    <div class="col-sm-6">
                        <input name="address"type="text" id="address" placeholder="주소를 입력하세요" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" id="email"name="email" placeholder="이메일주소를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">전화번호</label>
                    <div class="col-sm-2">
                        <select name="phone1" id="phone1"class="form-control">
                            <option>010</option>
                            <option>011</option>
                            <option>017</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" id="phone2"name="phone2" value="" size="4" maxlength="4" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" id="phone3"name="phone3" value="" size="4" maxlength="4" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">성별</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" id="genderF" value="F" name="gender"> 여성
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" id="genderM" value="M" name="gender"> 남성
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">취미</label>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]" id="photo" value="photo">사진찍기
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]" id="food" value="food">맛집 탐방
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]" id="shopping" value="shopping">쇼핑
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]"id="plan" value="plan">계획적
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]"id="walk" value="walk">뚜벅이
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]"id="ride" value="ride">이동수단이용
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="naturals" value="naturals">자연풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="city" value="city">도시풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="crowd" value="crowd">붐비는 곳
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="silence" value="silence"> 조용한 곳
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="etcCheckbox" value="Etc"> 기타
                                <input type="text" id="etc"  placeholder="기타" class="form-control">
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="intro" class="col-sm-3 control-label">자기소개</label>
                    <div class="col-sm-6">
                        <textarea type="text" id="intro"name="intro" placeholder="자기소개를 작성하세요." rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                            <div class="col-sm-4">
                              <button type="button" value="delete" class="btn btn-primary btn-block">회원탈퇴</button>
                            </div>
                            <div class="col-sm-4">
                              <button type="cancel" value="Cancel" onclick="history.back();" class="btn btn-primary btn-block">취소</button>
                            </div>

                            <input type="hidden" id="ckpw" name="ckpw" value="0">

                            <div class="col-sm-4">
                              <button  type="button" id ="submitbt"value="Submit" class="btn btn-primary btn-block">변경</button>
                            </div>
                   
                        </div>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
          <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
      </div><!--/signup-->

   <!-- //controll edit mode -->

    <script>
     
    var signupVue = new Vue({
        el : '.form-horizontal',
        data : {
            pass1 : '',
            pass2 : '',
            message : '',
            hobby : [{en : 'photo', kr : '사진촬영'},
                    {en : 'food' , kr : '맛집탐방'},
                    {en : 'shopping', kr : '쇼핑'},
                    {en:'plan',kr:'계획적'},
                    {en:'ride',kr:'걷기싫어함'},
                    {en:'walk',kr:'뚜벅이'},
                    {en:'naturals',kr:'자연풍경'},
                    {en:'city',kr:'도시풍경'},
                    {en:'crowd',kr:'붐비는곳'},
                    {en:'silence',kr:'조용한곳'}
                //photo,food,shopping,plan,ride,walk,naturals,city,crowd,silence
            ],
            overlapCheck : 0
        }

    });

      document.getElementById('name').value = '<?=$row['name']?>';
        document.getElementById('bday').value = "<?=$row['age']?>"+"-01-01";
        document.getElementById('address').value = '<?=$row["address"]?>';
        document.getElementById('intro').value = '<?=$intro?>';
        document.getElementById('email').value = '<?=$row['email']?>';
        if('<?=$row['gender']?>'=='F')
            document.getElementById('genderF').checked = true;
        else if('<?=$row['gender']?>'=='M')
            //document.getElementById('genderF').checked = false;
            document.getElementById('genderM').checked = true;
        var phone = '<?=$row['tel']?>'.split('-');
        document.getElementById('phone1').value = phone[0];
        document.getElementById('phone2').value = phone[1];
        document.getElementById('phone3').value = phone[2];
        
    </script>
    <?
        //show hobby
        $sql = "SELECT * FROM traveltype WHERE userID='$userId'";
        $result = mysql_query($sql) or exit(mysql_error());
        $row = mysql_fetch_array($result) or exit(mysql_error());

        $hobbyold = array($row['photo'],$row['food'],$row['shopping'],$row['plan'],$row['walk'],
            $row['ride'],$row['naturals'],$row['city'],$row['silence'],$row['crowd']);
        $hobbylist = array("photo","food","shopping","plan","walk","ride","naturals","city","silence","crowd");
        $i=0;
        foreach ($hobbylist as $h){
            
            if($hobbyold[$i]){
                
                echo("<script>
                console.log($hobbyold[$i]);
                    document.getElementById('$h').checked = true;
                </script>");
            }else{
                echo("<script>
                console.log($hobbyold[$i]);
                    document.getElementById('$h').checked = false;
                </script>");
            }
            $i ++;
        }
    ?>
    <script>
    window.onload = function(){ 

        
        var bt2 = document.getElementById("checkbt");
        bt2.addEventListener("click",checkpw); 
        
        function checkpw(){
            var pw = document.getElementById('pw').value;
            ifrm1.location.href="pw_check.php?pw="+pw; 
        }
        var bt = document.getElementById("submitbt");
        bt.addEventListener("click",ispwchecked); 
        function ispwchecked(){
            var ckpw = document.getElementById('ckpw').value;
            var pw = document.getElementsByName('password2');
            if(ckpw=="0"){
                console.log(ckpw);
                alert("기존 비밀번호를 확인해주세요.");
            }
    /*          else if(pw[0] != pw[1]){
                alert("새 비밀번호와 새 비밀번호 재입력이 다릅니다.");
            } */
            else {
                console.log(ckpw);
               bt.setAttribute('type', 'submit');
            }
        }
        };


    </script>
    </body>