<?php
$sql="SELECT id, title, content, DATE_FORMAT(datePub, '%d/%m/%y')AS `date`, dateEnd, img, eval FROM news WHERE dateEnd>NOW() ORDER BY `date` DESC LIMIT 3";
$result=$dbh->prepare($sql);
$result->execute();
?>
