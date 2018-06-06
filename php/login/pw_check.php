<?
 include "../dbConnect.php";

 session_start();
 extract($_SESSION);
 extract($_GET);

 $query="select pass from user where id='$userId'";
 $result=mysql_query($query) or exit(mysql_error());
 $row=mysql_fetch_array($result);
 mysql_close($connect);
 $hashed = password_hash("$pw",PASSWORD_BCRYPT);


    if(password_verify($pw,$row['pass'])){
        echo("<script>
            parent.document.getElementById('ckpw').value='1';
            parent.alert('비밀번호 확인 완료');
        </script>");
    }
    else{
        echo('<script>
        parent.document.getElementById("ckpw").value="0";
        parent.alert("비밀번호가 일치하지않습니다.");
        </script>');
    }

?>