<?
    extract ($_GET);

    include '../dbConnect.php';

    $sql = "DELETE FROM $table";
    $sql .= "_ripple WHERE ripID = $ripID";

    $result = mysql_query($sql) or exit(mysql_error());

    mysql_close();
    
    echo("
        <script>
            history.go(-1);
        </script>
    ")

?>