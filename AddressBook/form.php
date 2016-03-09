<?php
mb_internal_encoding('UTF-8');
$pageTitle = 'Добавяне артикули';
include 'A/Header.php';


	if($_POST){
		$nameProd=trim($_POST['nameProd']);
		$nameProd=str_replace('!','',$nameProd);
		$price=trim($_POST['price']);
		$price=floatval(str_replace('!','',$price));
		$selectedGroup=(int)$_POST['group'];
		$error=false;
		$date= date('d-m-Y');
		
	
	if((mb_strlen($nameProd)<=3) && (mb_strlen($nameProd) !== 0)){
		echo '<p>Името е прекалено късо</p>';
		$error=true;
		}
		
	if($price<=0){
		echo '<p> Въведетe стойност за продукта</p>';
		$error=true;
		}
		
	if(!array_key_exists($selectedGroup, $groups)){
		echo '<p> Моля изберете група </p>';
		$error=true;
		}
		
	if(!$error){
		$result=$date.'!'.$nameProd.'!'.$price.'!'.$selectedGroup."\n";
			if(file_put_contents('product.txt', $result, FILE_APPEND)){
				echo 'Записа е успешен! ';
			}
		}
	}
	

?>
<br>
	<button><a href="index.php"> Добави артикул  </a>	</button>
		<form method="Post"><br>		
			<div>Име <input type="text" name="nameProd"> </div>
			<div>Стойност <input type="text" name="price"></div>
			<div>Вид
				<select name="group">
				<?php
					foreach ($groups as $key=>$value){
						echo '<option value="'. $key .'"> '.$value.'</option>';	
					}
				?>
				</select>
			</div><br>				
			<div><input type="submit" value="Добави"> </div>
		</form>


<?php
include 'A/footer.php';
?>