
<?
    include '../dbConnect.php';
    session_start();
    extract($_SESSION);
    //delete travel type
    $table = array("east_partner_","west_partner_","north_partner_","south_partner_");
    $sql = "DELETE FROM traveltype WHERE userID = '$userId'";
    $result = mysql_query($sql);
    //delete delete my ripple;
    foreach($table as $t){
        $sql = "DELETE FROM $t";
        $sql.= "ripple WHERE userID = '$userId'";
        $result = mysql_query($sql) or exit(mysql_error());
    }
    
    //delete ripple from boardID;
    foreach($table as $t){
        $sql = "SELECT boardID FROM $t";
        $sql .="board WHERE userID='$userId'";
        $result = mysql_query($sql) or exit(mysql_error());
        while($row = mysql_fetch_array($result)){
            $sql = "DELETE FROM $t";
            $sql.= "ripple WHERE boardID = $row[0]";
            $results = mysql_query($sql)or exit(mysql_error());
        };
    
    };
    //delete my board
    foreach($table as $t){
        $sql = "DELETE FROM $t";
        $sql.= "board WHERE userID = '$userId'";
        $result = mysql_query($sql)or exit(mysql_error());
    };

    $sql = "DELETE FROM user WHERE id = '$userId'";
    $result = mysql_query($sql);
    
    //delete 
    echo("<script>
        alert('탈퇴가 정상적으로 처리되었습니다.');
        location.href='../login/logout.php';
        location.href='../../main_boot.php';
    </script>");
    unset($_SESSION['userID']);
    session_destroy();
    echo("
        <script>
            history.go(-1);
        </script>
    ");
?>