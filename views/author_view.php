<h1 style="text-align: center; padding-top: 3%;">Информация об авторе нашего сайта</h1>
	<div style="text-align: center; padding-top: 2%; font-size: 18px;">
 	
 	<?php

 	 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
 		 $data->data_seek($row_no);
 		 $row = $data->fetch_assoc();
 	
 		 echo "<div>".$row['id']."</p>
 		 <p>".$row['fio']."</p>
 		 <p>".$row['age']."</p>
 		 <p>".$row['location']."</p>
 		 <p>".$row['additional']."</div>";
 	 }
 	?> 
	
	</div>