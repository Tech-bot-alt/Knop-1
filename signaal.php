<?php
session_start();
$_SESSION['knop1'] = true;
file_put_contents('signalen.log', "Knop 1 werd geactiveerd door sessie op ".date('c')."\n", FILE_APPEND);
echo json_encode(['success'=>true]);
?>
