<html>
<head>
<?
      session_start();
      extract($_SESSION);
    ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link href="../../css/login.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="login-container">
                <div id="output"></div>
                <div class="avatar"></div>
                <div class="form-box">
                        <input v-model ="id" id ="id" type="TEXT" placeholder="username">
                        <input v-model ="pass" id ="pass" type="password" placeholder="password">
                        <button class="btn btn-info btn-block login" type="button" v-on:click="child">Login</button>
                        <a class="btn join" type="" href="login_sign_up.php">Sign up!</a>
                </div>
            </div>
            <input type="hidden" id="success" value=false>
          <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
            
    </div>

    <script>
        var vues =new Vue({
            el : '.form-box',
            data : {
                success : false,
                id :'',
                pass : ''
            },
            methods :{
                child:function(){
                    //console.log(id.value);
                    //console.log(pass.value);
                    ifrm1.location.href="logincheck2.php?id="+id.value+"&pass="+pass.value; 
                }
            }
        });
            
    </script>
</body>
</html>