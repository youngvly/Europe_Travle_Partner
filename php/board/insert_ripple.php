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
    if(!$ripple_content) {
        echo("
            <script>
                window.alert('내용을 입력하세요.');
                history.go(-1);
            </script>
        ");
        exit;
    }

    
    if("$where" == "east") $boardname="east_partner_ripple";
    if("$where" == "west") $boardname="west_partner_ripple";
    if("$where" == "south") $boardname="south_partner_ripple";
    if("$where" == "north") $boardname="north_partner_ripple";

    include "../../php/dbConnect.php";
    //덧글 삽입 명령
    $sql="insert into $boardname(boardID,userID,contents) values($boardID,'$userId','$ripple_content')";
    echo($sql);
    $result = mysql_query($sql,$connect)or exit(mysql_error());
    mysql_close();
    echo("
        <script>
            history.go(-1);
        </script>
    ");
    
?>