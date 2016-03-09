<?php
include 'A/header.php';
mb_internal_encoding ('UTF-8');
$pageTittle='LogIn';
 

 if($_SESSION['isLogged']==true){
		header('Location: files.php');
		exit;
	}
		else{
			if($_POST){
				$username=trim($_POST['username']);
				$pass=trim($_POST['pass']);
					if($username=='user' && $pass=='qwerty'){
						$_SESSION['isLogged']=true;
							header('Location: index.php');
								exit;
					}	
						else{ 
							echo 'Грешни данни. Въведете отново!';
							
						}
			}
?>

		<form method="POST">
			<div>Потребителско име <input type="text" name="username" </div>
			<div>Вашата парола <input type="password" name="pass" /></div>
			<div><input type="submit" value="Log In" /></div>

		</form>

<?php
		}
include 'A/footer.php';
?>
