<?php
$table = array('<b>' => '<i>', '</b>' => '</i>');
$html = '<b>Today In PHP-Powered News</b>';
echo strtr($html, $table);
?>