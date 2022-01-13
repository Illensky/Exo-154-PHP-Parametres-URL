<?php
$ite = $_GET["iteration"];
$ite = (int)$ite;

for ($i = 0; $i < $ite; $i++){
    echo "<a href=".$i.">".$i."</a>";
    $_GET['iteration'] = $i;
}