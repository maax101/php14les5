<?php
$notes = 'notes.txt';
$content = json_decode(file_get_contents($notes), true);
?>	
<html> 
	<head>  
		<title>Записная книжка.</title>
 	</head>
	<body>
  		<h1>Записная книжка:</h1>  		
  		<table border="1" >
  		 			
  				<tr>
  					<td >Имя</td>
  					<td>Фамилия</td>
  					<td>Адрес</td>
  					<td>Телефон</td>
  					<td>E-mail</td>
  					<td>Заметки</td>
  				</tr>
  				<?php foreach ($content as $v):?>
  					
  				<tr>
  					<td><?=$v['fname']?></td>
  					<td><?=$v['lname']?></td>
  					<td>
	  					<?=$v['adr']['postcode']?></br>
	  					<?=$v['adr']['city']?></br>
	  					<?=$v['adr']['street']?></br>
	  					<?=$v['adr']['buildNo']?></br>
	  					<?=$v['adr']['aprtmt']?></br>
  					</td>
  					<td><?=$v['phone'][0]?></br>
  						<?=$v['phone'][1]?></br>
  					</td>
  					<td><?=$v['email'][0]?></br>
  						<?=$v['email'][1]?></br>
  					</td>
  					<td><?=$v['notes']?></td>
  				</tr>
  			<?php  endforeach;?>
  		</table>  					
	</body>
</html>





