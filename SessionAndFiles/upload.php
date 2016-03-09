<?php
$pageTitle = 'Upload'; 
include_once('A'. DIRECTORY_SEPARATOR .'header.php');


if (isset($_SESSION['isLogged'])){
    if (isset($_POST['upload'])){
        if($_FILES){
			if(move_uploaded_file($_FILES['forUpload']['tmp_name'], $userPath . DIRECTORY_SEPARATOR . $_FILES['forUpload']['name'])){
					echo "Файлът е качен!";
					}
					else
					{
						echo "Файлът не е качен!";
					}

			}
		}
	}	

?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="forUpload" value="picture" />
    <input type="submit" name="upload" value="Качи" />
    <br />
    <a href="files.php">Виж качените файлове!</a>
</form>

<?php
include_once 'A/footer.php'

?>