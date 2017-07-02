<html> 
    <body> 
        <?php
        //获取传值
        $title = $_POST["title"];
		$author = $_POST["author"];
        $msg = $_POST["msg"];

        //确认是否为正常提交
        if ($title == ""||$msg == "") {
            header("Location: ../apply");
            exit();
        }

        $zero = date("Y-m-d H:i:s");
		$year = date('Y') - 2017;
        $month = date('m');
        $day = date('d');
        $h = date('H');
        $i = date('i');
        $s = date('s');
        $id = 150000000000 - (1500000000 * $year + 100000000 * $month + 3000000 * $day + 100000 * $h + 1000 * $i + 15 * $s + rand(-10,10));
		
        //写入数据
        $f = fopen("../list/" . $id . ".txt", "w");
        fwrite($f, $title . "\r\n");
		fwrite($f, $author . "\r\n");
        fwrite($f, $zero . "\r\n");
        fwrite($f, $msg . "\r\n");
        fclose($f);

        //跳转已报名页面
		echo "<script> alert('发表成功'); </script>"; 
        header("Location: ../");
        ?>
    </body> 
</html> 