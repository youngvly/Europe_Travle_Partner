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
    <script>
  
    </script>

  </head>
  <body>
  <div class="container">
            <form class="form-horizontal" role="form"  action="sign_up_action.php" method="post">
                <center><h2> ◎ 회원 가입 ◎ </h2></center>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">이름</label>
                    <div class="col-sm-6">
                        <input type="text" name ="name"id="firstName" placeholder="이름을 입력하세요" class="form-control" autofocus>
                   </div>
                </div>
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">아이디</label>
                    <div class="col-sm-4">
                        <input type="text" id="cid" name="id" value="" placeholder="아이디를 입력하세요" class="form-control">
                    </div>
                    <div class="col-sm-2"> 
                        <!--아이디 중복검사 : 버튼,검사됬는지 chk_id2 boolean-->
                    <input type=button value="중복검사" id="idckbt" class="btn btn-primary btn-block">
                    <input type=hidden id="chk_id2" name=chk_id2 value="0"></td>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">비밀번호</label>
                    <div class="col-sm-6">
                        <input v-model="pass1" name="password" type="password" id="password" placeholder="비밀번호를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">비밀번호 확인</label>
                    <div class="col-sm-6">   
                            <input v-model="pass2" name="password" type="password" id="password" placeholder="비밀번호를 재입력하세요." class="form-control">
                         <!--비밀번호 확인 다름 알림-->
                            <span v-if="pass1 != pass2">비밀번호 확인란을 재입력해주세요.</span> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">생년월일</label>
                    <div class="col-sm-6">
                        <input type="date" id="birthDate" name = "bday" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">주소</label>
                    <div class="col-sm-6">
                        <input name="address"type="text" id="adress" placeholder="주소를 입력하세요" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="email" placeholder="이메일주소를 입력하세요." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">전화번호</label>
                    <div class="col-sm-2">
                        <select name="phone1" class="form-control">
                            <option>010</option>
                            <option>011</option>
                            <option>017</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="phone2" value="" size="4" maxlength="4" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="phone3" value="" size="4" maxlength="4" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">성별</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="F" name="gender"> 여성
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="M" name="gender"> 남성
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
                                <input type="checkbox" name="hobby[]" id="photoCheckbox" value="photo">사진찍기
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]" id="foodCheckbox" value="food">맛집 탐방
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]" id="shoppingCheckbox" value="shopping">쇼핑
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]"id="planCheckbox" value="plan">계획적
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"name="hobby[]"id="walkCheckbox" value="walk">뚜벅이
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="naturalsCheckbox" value="naturals">자연풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="cityCheckbox" value="city">도시풍경
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="crowdCheckbox" value="crowd">붐비는 곳
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hobby[]"id="silenceCheckbox" value="silence"> 조용한 곳
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
                        <textarea type="text" name="intro" placeholder="자기소개를 작성하세요." rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">동의합니다. <a href="#">자세히 보기</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                            <div class="col-sm-4">
                              <button type=reset value="Reset" class="btn btn-primary btn-block">다시작성</button>
                            </div>
                            <div class="col-sm-4">
                              <button type="cancel" value="Cancel" onclick="history.back();" class="btn btn-primary btn-block">취소</button>
                            </div>
                            <div class="col-sm-4">
                              <button type="submit" id="submitbt"value="Submit" class="btn btn-primary btn-block">제출</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
          <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
      </div><!--/signup-->
  
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

    })
    </script>
     <script>
    window.onload = function(){ 

      

        var bt2 = document.getElementById("idckbt");
        bt2.addEventListener("click",child); 
        //아이디 중복체크 함수
        function child(){
        document.getElementById("chk_id2").value=0;
        var id=document.getElementById("cid").value;
        
        ifrm1.location.href="id_overlap_check.php?userid="+id; 
        }


        var bt = document.getElementById("submitbt");
        bt.addEventListener("click",ispwchecked); 
        function ispwchecked(){
            var ckpw = document.getElementById('chk_id2').value;
            if(chk_id2=="0"){
                console.log(ckpw);
                alert("아이디 중복확인을 해주세요");
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
    </html>