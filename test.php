
<head>
<meta charset=”UTF-8″>
<title>【ride_share_prediction】</title>
</head>
<body>
<h1>ride share の売り上げ予測</h1>
<form method="post" action="test.php" enctype="multipart/form-data">
	<input type="file" name="csvfile"> <br />
	<input type="submit" value="送信"><br />
</form>
<!--ボタンを押したら予測結果を表示するようにしたい-->
<form method='post' action="D:\XAMPP\htdocs\pythontest\execPython.php" enctype="text/plain">
    <input type="button" value="predict start">
</form>
<?php

$fp = fopen('D:\XAMPP\htdocs\pythontest\csvFolder\uploaded.csv', 'w');
//フォームから送られたデータ:$_FILES[“csvfile”][“tmp_name”]
$tmp = fopen($_FILES["csvfile"]["tmp_name"], "r");
while ($csv[] = fgetcsv($tmp, "1024")) {}
//fopen()関数で、ファイルを開く。”r”というのは「読み込み専用」という指示です。
//ここで2次元配列にする。fgetcsv()関数により、csvデータを読み込む。
foreach($csv as $value){
    var_dump($value);
 
	$line = implode(',' , $value);
	fwrite($fp, $line . "\n");
}

fclose($fp);


?>
</body>
</html>