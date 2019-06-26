<?php
function database(){
try {
	$pdo = new PDO( 'mysql:host=localhost;dbname=u302406342_kevin;charset=utf8', 'u302406342_kevin', 'Y1o232nkkguZ' );
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
	 return $pdo;
} catch ( PDOException $e ) {
	echo $e->getFile().' on line ' . $e->getLine() . ': ' . $e->getMessage();
	exit();
}

}


?>