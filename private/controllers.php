<?php
function homepage(){
	  $statement = get_news();
  // Hier komt de include van je PHP/HTML bestand
	  include "../private/views/homepage.php";
	
}

function agenda(){
	  $statement = get_agenda();
  // Hier komt de include van je PHP/HTML bestand
	include "../private/views/agenda.php";
}
function contact(){
  // Hier komt de include van je PHP/HTML bestand
	include "../private/views/contact.php";	
}
function zoeken(){
$searchterm = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
$zoekresultaten = search_database($searchterm);
include "../private/views/zoekresultaten.php";
}

?>