<?
 include "../dbConnect.php";

 $cid=$_GET['userid'];
 $query="select count(id) from user where id='$cid'";
 $result=mysql_query($query) or exit(mysql_error());
 $row=mysql_fetch_array($result);
 mysql_close($connect);

?>
<script>
    var row="<?=$row[0]?>";
    if('<?=$cid?>' == ''){
        parent.document.getElementById("chk_id2").value="0";
        parent.alert("아이디를 입력해주세요.");
    }
    if(row==1){
        parent.document.getElementById("chk_id2").value="0";
        parent.alert("이미 사용중인 아이디입니다.");
    }
    else{
        parent.document.getElementById("chk_id2").value="1";
        parent.alert("사용 가능합니다.");
    }
</script>