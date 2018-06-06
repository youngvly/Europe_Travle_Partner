<?
session_start();
extract($_SESSION);
extract($_POST);
    include '../dbConnect.php';
      $birthEx = explode('-',"$bday");
   // $age = (int)date("Y")-(int)$birthEx[0] +1; 
   if($password2){
    $hashed = password_hash("$password2",PASSWORD_BCRYPT);
    $sql = "update user set pass='$hashed' where id='$userId'";
    $result = mysql_query($sql);
    }
    $phone = "$phone1".'-'."$phone2".'-'."$phone3";
    //user 테이블에 기본정보 삽입
    $sql = "update user set name='$name',age='$birthEx[0]',gender='$gender[0]',
             address='$address',tel='$phone',email='$email',intro='$intro' where id='$userId'";
    $result = mysql_query($sql) or exit(mysql_error());
    
    //traveltype테이블에 여행취향 데이터 삽입
    $hobbylist = array("photo","food","shopping","plan","walk","ride","naturals","city","silence","crowd");
    for($i=0; $i<count($hobbylist) ; $i++){
        if(in_array($hobbylist[$i],$_POST['hobby'])){
            $hobbylist[$i]=1;
        }else{
            $hobbylist[$i]=0;
        }
    } 
    
    $sql = "delete from traveltype where userID = '$userId'";
    $result = mysql_query($sql) or exit(mysql_error());

    $sql = "insert traveltype(userID,photo,food,shopping,plan,walk,Ride,naturals,City,silence,Crowd)";
    $sql .= "values ('$userId'";
    foreach ($hobbylist as $h){
        $sql .=", $h";
    }
    $sql .= ")";
   
    $result = mysql_query($sql) or exit(mysql_error());

    echo'
        <script>
            alert("회원정보 수정완료");
           // location.href ="../../main_boot.php";
        </script>
        ';
    mysql_close();
    ?>