<? php
try{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=forum_member;charset=utf8', 'root', '');
}catch(Exception $e){
	echo 'erreur';
}

?>