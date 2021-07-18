<?php
$command = 'python D:\XAMPP\htdocs\pythontest\predict.py';
exec($command, $output);
foreach($output as $value) {
    echo $value."\n";
}
?>