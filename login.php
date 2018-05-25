<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/additional.css" rel="stylesheet" type="text/css">
    
    <script>
        $(function(){
            var id = $("input[name=user]");
            var password = $("input[name=password]");
            
            $('button[type="submit"]').click(function(e) {
               // $.post('login.php', {user: id});
                e.preventDefault();
                //little validation just to check username
                <?
                    extract($_POST);
                    extract($_SESSION);
                    //session_start(); 
                    $connect = mysql_connect('localhost','root','123456');
                     if(!$connect) echo "데이터베이스 연결 실패";
                    mysql_select_db('Europe_travle_Partner',$connect);
                    
                    $sql = "select * from user where id IN('$user')";
                    $result = mysql_query($sql,$connect);
                    $isid =  mysql_num_rows($result);
                   // echo("$user $isid");
                ?>
                //little validation just to check username
                
                var isid = <?=$isid?>;
                console.log(isid , id);
               // if (id.val() != <?=$isid?>) {
                if(isid){
                    //$("body").scrollTo("#output");
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                    $("#output").removeClass(' alert-danger');
                    $("input").css({
                    "height":"0",
                    "padding":"0",
                    "margin":"0",
                    "opacity":"0"
                    });
                    //change button text 
                    $('button[type="submit"]').html("continue")
                    .removeClass("btn-info")
                    .addClass("btn-default").click(function(){
                    $("input").css({
                    "height":"auto",
                    "padding":"10px",
                    "opacity":"1"
                    }).val("");
                    });
                    
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('http://api.randomuser.me/0.3.2/portraits/women/35.jpg')"
                    });
                } else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
                }
                //console.log(textfield.val());

            });
    });
    </script>
</head>

<body>
<?
    
    //login check
    /*   
        extract($_POST);
        extract($_GET);
        extract($_SESSION);
        include "php/dbConnect.php";
        session_start();
        if($mode =="check"){
        
        $sql = "select * from user where id IN('$user')";
        $result = mysql_query($sql,$connect);
        //아이디 에러
        if (! mysql_num_rows($result)){?>
            <script>$("#output").addClass("alert alert-danger animated fadeInUp").html("등록된 id가 업습니다.");</script>
        <?}

        else {
             $row = mysql_fetch_array($result);
            //패스워드 에러
            echo("$row[1]");
            if($row[1] != '$password'){?>
             <script>$("#output").addClass("alert alert-danger animated fadeInUp").html("패스워드가 올바르지 않습니다.");</script>
                <?
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
    }*/
    ?>
    <div class="container">
        <div class="login-container">
                <div id="output"></div>
                <div class="avatar"></div>
                <div class="form-box">
                    <form action="login.php?mode=check" method='post'>
                        <input name="user" type="text" placeholder="username">
                        <input name ="password" type="password" placeholder="password">
                        <button class="btn btn-info btn-block login" type="submit">Login</button>
                    </form>
                </div>
            </div>
            
    </div>
</body>
</html>