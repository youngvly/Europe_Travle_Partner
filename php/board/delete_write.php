<?
    extract($_GET);
    include '../dbConnect.php';

    //외래키 묶인 댓글부터 삭제
    $sql = "DELETE FROM $table";
    $sql .= "_ripple WHERE boardID = $boardID";

    $result = mysql_query($sql) or exit(mysql_error());

    //글 삭제

    $sql = "DELETE FROM $table";
    $sql .= "_board WHERE boardID = $boardID";

    $result = mysql_query($sql) or exit(mysql_error());

    mysql_close();

    echo("
        <script>
            window.top.location.reload();
        </script>
    ")

?>