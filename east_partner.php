<html>
    <head>
            <meta charset="utf-8">
            <title>Europe_thavle_Partner</title>
            <script src="https://cdn.jsdelivr.net/npm/vue"></script>
            <style>
                table {
                    border-collapse: collapse;
                    border : 1px solid;
                }
                tr,td {
                    border : 1px solid;
                }
                table#t01 tr:nth-child(even) {
                    background-color: #eee;
                }
                table#t01 tr:nth-child(odd) {
                    background-color: #fff;
                }
                th {
                    background-color : rgb(161, 161, 161);
                    border-bottom: 1px solid;
                }
            </style> 
    </head>
    <body>
    <div id="all">
        <!--외교부 안전정보 API-->

        <!--글 검색-->
        <div class="search">
            <p>Search </p>
        </div>
        <!--글 게시판-->
        <div class ="board">
            <p>게시판</p>
            <table width='700px'>
                <tr>
                    <th>글번호</th> <th>국가</th> <th>지역</th> <th>목적</th> <th>희망날짜</th> <th>제목</th> <th>글쓴이</th>
                </tr>
             <?
                ini_set('display_errors','On');

                $connect = mysql_connect('localhost','root','123456');
                if(!$connect) echo "데이터베이스 연결 실패";
                mysql_select_db('Europe_travle_Partner',$connect);

                //east_partner_board 게시판출력
                $sql = "SELECT boardID,country,region,subject,DATE_FORMAT(app_date,'%Y-%m-%d')DATEONLY ,title,userID
                        FROM east_partner_board ";
                
                $result = mysql_query($sql,$connect);
                while($row = mysql_fetch_array($result)){
                    echo("<tr>");
                    for($i=0; $i<5; $i++){
                        echo("<td> $row[$i] </td>");
                    }
                    //제목은 link
                    echo("<td><a href='' @click='boardID =$row[0]'>$row[5]</a></td>");
                    //username을 출력하기 위해 user DB와 연동 
                    $sql = "SELECT name,userID FROM user WHERE userID IN ($row[6])";
                    $nameSQL = mysql_query($sql);
                    if(!$nameSQL) echo"sql error";
                    $namerow = mysql_fetch_array($nameSQL);
                    echo("<td>$namerow[0]</td>");    
                    echo("</tr>");
                }
            ?>
            </table>
            </br>
        </div>
        <div class="text">
            <table width ="700px">
                <?
                    $sql = "SELECT * from east_partner_board where boardID = 1 ";
                    $result = mysql_query($sql,$connect);
                    $row = mysql_fetch_array($result);
                    $sql = "SELECT name,userID FROM user WHERE userID IN ($row[userID])";
                    $nameSQL = mysql_query($sql);
                    $namerow = mysql_fetch_array($nameSQL);

                    echo "<tr><td colspan='3'><h4>$row[subject]</h4><h3 align='center'>$row[title]</h3></td></tr>";
                    echo("<tr><td>작성자 : $namerow[name]</td><td>작성일 : $row[reg_date]</td><td>조회수 : $row[hits]</td></tr>");
                    echo ("<tr><td>국가 : $row[country]</td><td>지역 : $row[region]</td><td>인원 : $row[engagedPeople]/$row[requiredPeople]</td></tr>");
                    echo ("<tr><td colspan='3'>희망 날짜 : $row[app_date]</td></tr>");
                    echo("<tr><td colspan='3' height='200px'>$row[contents]</td></tr>");
                ?>
            </table>
        </div>
        
        <div>
            <button>Write</button>
        </div>
    </div>
    </body>

    <script>
        var all = new Vue({
            el : '#all',
            data :{
                boardID : 1        //띄워줄 게시글 ID
            }
        });
    </script>
</html>