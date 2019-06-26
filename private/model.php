<?php
function get_news() {
	$pdo = database();
   
		$query     = 'SELECT * FROM `article` ';
		$statement = $pdo->query( $query );

		return $statement; 

}


function get_agenda() {
	$pdo = database();
 
		$query     = 'SELECT * FROM `agenda` ORDER BY `id`';
		$statement = $pdo->query( $query );
		
		return $statement;
   
}
function search_database($searchterm){
		
		$result = [];
		
		$pdo = database();
		$sql = 'SELECT * FROM `article` WHERE titel LIKE :search_term';
		$statement = $pdo->prepare($sql);
		$params = [
			'search_term' => '%' . $searchterm . '%'
		];
		$statement->execute($params);

		foreach ($statement as $movie ) {
			$rij = [];
			$rij ['type'] = 'movie';
			$rij ['title'] = $movie['titel'];
			$rij ['image'] = $movie['image'];
			$rij ['beschrijving'] = $movie['beschrijving'];
			$rij ['auteur'] = $movie['auteur'];
			$rij ['title'] = $movie['titel'];
			$rij ['datum'] = $movie['datum'];

			$result[] = $rij; 
		}
		return $result;
   
}
?>