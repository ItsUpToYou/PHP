<?php
$pageTitle= 'Таблица';
include 'A/header.php';
?>

<br><form method="POST">
	<button><a href="form.php"> Добави Разход </a></button>
			
			<select name="filter">
			<?php
				$filter=null;
					if(isset($_POST['filter'])){
						$filter=$_POST['filter'];				
					}
					foreach($groups as $key=>$value){
						if($key==$filter){
							$selected='selected';
						}
						else{
							$selected='';
						}
						echo '<option value="'.$key.'"'.$selected.'>'.$value.'</option>';
					}		
			?>	

			</select>
		<input type="submit" value="Филтър" />
	</form>	
<br>
		<table border="1">
			<tr>
				<td align="center">Дата</td>
				<td align="center">Име</td>
				<td align="center">Сума</td>
				<td align="center">Вид</td>	
		<?php
			$total=0;
			if(file_exists('product.txt')){
				$result=file('product.txt');
					if($_POST){
						$filter=(int)$_POST['filter'];
					}
					foreach($result as $value){
						$columns=explode('!', $value);
							if(($filter!=0) and ($filter!=(trim($columns[3])))){
								continue;
								}		
									echo '<tr>
											<td>'. $columns[0] .'</td>
											<td>'. $columns[1] .'</td>
											<td>'. $columns[2] .'</td>
											<td>'.$groups[trim($columns[3])].'</td>
										 
										</tr>';
											$total+=$columns[2];
							}		
			}
		?>
		
		<tr>
			<td colspan="4" align="center">
				<?= 'Общо разходи: '.$total.' лв.'; 
				?>
			</td>
		</tr>	
	</tr>		
	</table>

<?php
include 'A/footer.php';

?>