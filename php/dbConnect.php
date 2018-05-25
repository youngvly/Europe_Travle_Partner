<? //PHP DB Connect init
        ini_set('display_errors','On');

        $connect = mysql_connect('localhost','root','123456');
            if(!$connect) echo "데이터베이스 연결 실패";
        mysql_select_db('Europe_travle_Partner',$connect);

    ?>