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
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>
    //아이디 중복체크 함수
        function child(){
            document.getElementById("chk_id2").value=0;
            var id=document.getElementById("cid").value;
            
            ifrm1.location.href="id_overlap_check.php?userid="+id; 
            }
    //아이디 중복체크 확인 함수 -> 안됬으면 제출불가.
        function idovercheck(){
         
            var bt = document.getElementsByName("button")[0];
            if(!chk_id2){
                alert("아이디 중복확인을 해주세요");
            }
            else {
                bt.type="submit";
            }
        }
       
    </script>

  </head>
  <body>
      <div class = "signup" id ="app">
          <div class="form">
          <h2><span class="heading">회원가입</span></h2>
            <form name="login_sign_up" action="sign_up_action.php" method="post">
            <input type="hidden" name="title" value="회원가입 양식">
            <table>
                <tr>
                <td class="list"><span>* </span>아이디</td>
                <td> <input id = "cid"type="text" name="id" value="" required length="15" maxlength="12">
                    <!--아이디 중복검사 : 버튼,검사됬는지 chk_id2 boolean-->
                    <input type=button value="중복검사" onclick=child()>
                    <input type=hidden id="chk_id2" name=chk_id2 value="0"></td>
                </tr>
                <tr>
                <td class="list"> <span>* </span>비밀번호</td>
                <td> <input v-model ="pass1" type="password" name="password" value="" required length="15" maxlength="12"> </td>
                </tr>
                <tr>
                <td class="list"> <span>* </span>비밀번호 확인</td>
                <td> <input v-model="pass2" type="password" name="password" value="" required length="15" maxlength="12">
                <!--비밀번호 확인 다름 알림-->
                <span v-if="pass1 != pass2">비밀번호 확인란을 재입력해주세요.</span> </td>
                </tr>
                
                <tr>
                <td class="list"> <span>* </span>이름</td>
                <td> <input type="text" name="name" value="" required length="5"> </td>
                </tr>
                <tr>
                <td class="list"> <span>* </span>성별</td>
                <td> 
                    여 <input type="radio" name="gender" value="F">
                    남<input type="radio" name="gender" value="M"> </td>
                </tr>
                <tr>
                    <td class ="list"> <span>* </span>출생년도</td>
                    <td><input type="date" name="bday" min="1960-01-02"><br></td>
                </tr>
                <tr>
                <td class="list"> <span>* </span>이메일</td>
                <td> <input type="email" name="email" value="" required length="20"> </td>
                <tr>
                <td class="list"> 휴대전화 </td>
                <td> <select class="" name="phone1">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="017">017</option>
                </select>
                -
                <input type="text" name="phone2" value="" size="4" maxlength="4" >
                -
                <input type="text" name="phone3" value="" size="4" maxlength="4" >
                </td></tr>
                <tr>
                <td class="list"> 주소</td>
                <td> <input type="text" name="address" value="" size="30" > </td>
                </tr>
                <tr>
                <td class="list">취미</td>
                <td>
                    <span v-for="item in hobby">
                        <input  class="hobby" type="checkbox" name="hobby[]" v-bind:value="item.en">{{item.kr}} &nbsp;
                    </span>
                </td>
                </tr>
                <tr>
                <td class="list">자기소개</td>
                <td> <textarea name="intro" rows="5" cols="40"></textarea> </td>
                </tr>
<!--                 <tr><td>
                    <input type="file" name="profile">
                    
                </td></tr> -->
            </table>
            <button type="button" onclick=changeBoolean() >바꾸기</button>
            <button onclick=idovercheck() type="button" name="button" >확인</button>
            <input type=reset value="다시작성">&nbsp;&nbsp;
            <input type=button value="취소" onclick="history.back();">
            </form>
          </div><!--/form-->
          <iframe src="" id="ifrm1" scrolling=no frameborder=no width=600 height=100 name="ifrm1"></iframe>
      </div><!--/signup-->
  
    <script>
    

    var signupVue = new Vue({
        el : '#app',
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
    </body>