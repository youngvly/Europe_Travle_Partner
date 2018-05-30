<html>
    <head>
        <?
            EXTRACT($_POST);
            EXTRACT($_SESSION);
            session_start();
        ?>
        <meta charset = "utf-8">
</head>
<body>
    
    <?
        include "../dbConnect.php";

        echo("dbconnected");
        $sql = "select * from user where id = $user";
        $result = mysql_query($sql,$connect);
        //아이디 에러
        if (!$row = mysql_num_rows($result)){
            //$("#output").addClass("alert alert-danger animated fadeInUp").html("등록된 id가 업습니다.");
        };

        else {
            $row = mysql_fetch_array($result);
            //패스워드 에러
            if($row[pass] != $password){
            // $("#output").addClass("alert alert-danger animated fadeInUp").html("패스워드가 올바르지 않습니다.");
                exit;
            }
            else{
                $_SESSION['id'] = $row[id];
                $_SESSION['userid'] = $row[userid];
                $_SESSION['username']=$row[username];

                echo ("
                    <script>
                        location.href ='main_boot.php';
                    </script>
                ");
            };
        };
        
    ?>
</body>
</html>
