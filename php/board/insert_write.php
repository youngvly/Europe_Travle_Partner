<?
    session_start();
    
    EXTRACT($_POST);
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
    $sql="insert into $boardname (userID,subject,country,region,requiredPeople,engagedPeople,title,contents,app_date,latlng) 
        values('$userId','$subject','$country','$region','$requiredPeople','$engagedPeople','$title','$content','$app_date','$latlng')";
    //echo($sql);
     $result = mysql_query($sql,$connect) or exit(mysql_error());

    echo("
        <script>
            location.href='../board/$boardname.php';
        </script>
    "); 
    
?>