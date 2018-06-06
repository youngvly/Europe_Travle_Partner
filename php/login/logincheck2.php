
<html>
  <head>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
  <script>
    var A = function() {
      parent.$("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " 
      + "<span style='text-transform:uppercase'>" + <?=$row[name]?> + "</span>");
            parent.$("#output").removeClass(' alert-danger');
            parent.$("input").css({
            "height":"0",
            "padding":"0",
            "margin":"0",
            "opacity":"0"
            });
            //change button text 
            parent.$('button[type="button"]').html("continue")
            .removeClass("btn-info")
            .addClass("btn-default").click(function(){
              history.go(-1);
              })/* .click(function(){
              parent.$("input").css({
            "height":"auto",
            "padding":"10px",
            "opacity":"1"
            }).val("");
            }) */;
    }
  </script>
  </head>
  <body>

<?
    extract($_GET);
   // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
   // 메시지 출력
   if(!$id) {
     echo("
           <script>
             //window.alert('아이디를 입력하세요.');
             parent.$('#output').removeClass(' alert alert-success');
             parent.$('#output').addClass('alert alert-danger animated fadeInUp').html('아이디를 입력하세요');

             //history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             //window.alert('비밀번호를 입력하세요.');
             parent.$('#output').removeClass(' alert alert-success');
             parent.$('#output').addClass('alert alert-danger animated fadeInUp').html('비밀번호를 입력하세요');
             //history.go(-1)
           </script>
         ");
         exit;
   }

   include "../dbConnect.php";

   $sql = "select * from user where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
           parent.$('#output').removeClass(' alert alert-success');
           parent.$('#output').addClass('alert alert-danger animated fadeInUp').html('등록되지 않은 아이디입니다.');
             //history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysql_fetch_array($result);

        $db_pass = $row["pass"];

        if(!password_verify($pass,$db_pass))
        {
           echo("
              <script>
              parent.$('#output').removeClass(' alert alert-success');
              parent.$('#output').addClass('alert alert-danger animated fadeInUp').html('비밀번호가 틀립니다.');
                //history.go(-1)
              </script>
           ");

           exit;
        }
        else  //로그인 성공
        {

          
          session_start();
        
           //$userid = $row["id"];
           $_SESSION['userId'] = "$id";
           $_SESSION['username'] = "$row[name]";
          
           echo("
              <script>
                parent.document.getElementById('success').value = true; 
                console.log(' login success');
                A();
                //history.go(-1)
                //location.href = '../../main_boot.php';
              </script>
           ");
        }
   }          
?>

  </body>
</html>
