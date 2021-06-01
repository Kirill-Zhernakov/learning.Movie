<table>
 <tr><th class="column_id">ID</th><th class="column_title">Title</th><th class="column_content">Content</th><th class="column_postcard">Postcard</th></tr>
 
 <?php
 //$data получаем выше, когда файл template_view include-руют в классе View и передают данные
 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
  $data->data_seek($row_no);
  $row = $data->fetch_assoc();
  
  echo
"<tr><td>".$row['id_news']."</td><td>".$row['title']."</td><td>".$row['content']."</t
d><td><img src='".$row['postcard']."' width='200'/></td></tr>";
 } 
 ?>
</table>