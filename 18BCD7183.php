<?php
$fp = fopen('18BCD7183.csv', 'a');
$fields = array($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['program'], $_POST['state'], $_POST['city'], date("d-m-Y"));
fputcsv($fp, $fields);
fclose($fp);
header("Location:thankyou.html");
return;
?>