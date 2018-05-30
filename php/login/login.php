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
    });*/
    </script>
</head>

<body>
<?
    
  
    ?>
    <div class="container">
        <div class="login-container">
                <div id="output"></div>
                <div class="avatar"></div>
                <div class="form-box">
                    <form action="logincheck2.php" method='post'>
                        <input name="id" type="text" placeholder="username">
                        <input name ="pass" type="password" placeholder="password">
                        <button class="btn btn-info btn-block login" type="submit">Login</button>
                        <a class="btn join" type="" href="login_sign_up.php">Sign up!</a>
                    </form>
                </div>
            </div>
            
    </div>
</body>
</html>