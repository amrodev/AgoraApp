<?php 
require_once '../lib/cards.php';
$_card = new Cards();

if(isset($_POST['savecard']))
{
    $card = $_POST['card'];
    $_card->save(null,$card);
    
}

?>