<?php
if ( isset($_GET['f'])){
$file = $_GET['f'];

unlink("cam/$file");
}
?>