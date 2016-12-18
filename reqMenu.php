<?php
$sql="SELECT link,slug FROM pages WHERE view=1";
$result=$dbh->prepare($sql);
$result->execute();
