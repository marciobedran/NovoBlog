<?php

$bd = mysql_connect("localhost", "root", "");
if (!$bd) {
    die('Could not connect to mysql ' . mysql_error());
} else {
    mysql_select_db("blog", $bd);
}
?>