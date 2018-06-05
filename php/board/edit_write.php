<?
    session_start();
    
    EXTRACT($_POST);
    EXTRACT($_GET);
    EXTRACT($_SESSION);
?>
<meta charset="utf-8">
<?
    if(!$userId){
        echo("
            <script>
                window.alert('로그인 후 이용하세요.');
                history.go(-1);
                console.log($ripple_content);
            </script>
        ");
        exit;
    };

    include "../../php/dbConnect.php";

    $sql = "select * from user where id='$userId'";
    $result = mysql_query($sql,$connect)or exit(mysql_error());
    $row = mysql_fetch_array($result);

    if("$where" == "east") $boardname="east_partner_board";
    if("$where" == "west") $boardname="west_partner_board";
    if("$where" == "south") $boardname="south_partner_board";
    if("$where" == "north") $boardname="north_partner_board";

    $app_date = date("$date $time:00");
    //글 삽입 명령
    $sql="update $boardname SET subject='$subject',country='$country',region='$region',
    requiredPeople=$requiredPeople,engagedPeople=$engagedPeople,title='$title',contents='$content',app_date='$app_date',latlng='$latlng'
    WHERE boardID = $boardID";

    //echo($sql);
     $result = mysql_query($sql,$connect) or exit(mysql_error());

    echo("
        <script>
            location.href='../board/$boardname.php';
        </script>
    "); 
    
?>