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

    include "php/dbConnect.php";

    $sql = "select * from user where userID='$userID'";
    $result = mysql_query($sql,$connect);
    $row = mysql_fetch_array($result);

    //덧글 삽입 명령
    $sql="insert into east_partner_ripple(boardID,userID,contents) values($boardID,$userID,$ripple_content)";
    $result = mysql_query($sql,$connect);

    mysql_close();

    echo("
        <script>
            history.go(-1);
        </script>
    ");
    
?>