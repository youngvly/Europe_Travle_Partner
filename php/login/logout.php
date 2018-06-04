<?
    session_start();
    unset($_SESSION['userID']);

    echo("
        <script>
            history.go(-1);
        </script>
    ");
    session_destroy();

?>