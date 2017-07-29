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
	  					Индекс: <?=$v['adr']['postcode']?>,</br>
	  					Город: <?=$v['adr']['city']?>,</br>
	  					ул. : <?=$v['adr']['street']?>,</br>
	  					д. №: <?=$v['adr']['buildNo']?>,</br>
	  					кв. №: <?=$v['adr']['aprtmt']?>.</br>
  					</td>         
                       
  					<td>
            <?php foreach ($v['phone'] as $value) {?>
            <?=$value?></br>
  					<?php } ?>
  					</td>
          
  					<td>
            <?php foreach ($v['email'] as $value) {?>
            <?=$value?></br>
            <?php } ?>
  					</td>
  					<td><?=$v['notes']?></td>
  				</tr>
  			<?php  endforeach;?>
  		</table>  					
	</body>
</html>





