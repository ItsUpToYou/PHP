<?php
$pageTitle = 'Качени Файлове'; 
include 'A'.DIRECTORY_SEPARATOR .'header.php';


  if (isset($_SESSION['isLogged'])){
			
         echo "Здравейте, това е недовършена задача от един начинаещ, до тук я докарах :/ ако може да разяснение какво следва да направя че нещо се обърках и с кои команди, ще съм ви благодарен за критиката. <a href='destroy.php'>ИЗХОД</a><br />";
        echo "<a href='upload.php'>Качи нов файл</a>";
         $content = scandir($userPath);
		
    }
    else if (!isset($_SESSION['isLogged']))
    {
        echo("Трябва да се впишете в системата за да видите тази страница! <a href='index.php'>Назад</a>");
		session_destroy($_SESSION['isLogged']);
	}
    
    if (count($content) <= 2)
    {
        echo "Няма качени твои файлове!";
    }
    else {
        echo '<table border="1">
             <thead><tr><th>Име</th><th>Размер</th></tr></thead>';
			 }
?>