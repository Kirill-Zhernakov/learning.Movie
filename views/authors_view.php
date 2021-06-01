<h1 style="text-align: center; padding-top: 3%;">Список авторов нашего сайта</h1>

	<table style="width: 40%; margin: auto; margin-top: 2%; text-align: center;" >
 		<tr><th>ID</th><th>Ф.И.О.</th><th>Возраст</th><th>Узнать подробнее</th></tr>
 
 		<?php
 			for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
 				$data->data_seek($row_no);
 				$row = $data->fetch_assoc();
 
 			echo 
 "<tr style='font-size: 18px;'><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['age']."</td><td><a href='/journal/about/author/?id=".$row['id']."'target='_blank' style='font-weight: bold; color: #F02B52; text-decoration: none;'>Подробнее</a></td></tr>";

 			}
 		?>
	</table> 

