CREATE TABLE `user_detail` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `age` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="modify_records.js"></script>
</head>
<body>
<div id="wrapper">

<?php
$host="localhost";
$username="root";
$password="root";
$databasename="Antony_assignment-4";
$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

$select =mysql_query("SELECT * FROM user_detail");
?>

<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>NAME</th>
<th>AGE</th>
<th></th>
</tr>
<?php
while ($row=mysql_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['id'];?>">
  <td id="name_val<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
  <td id="age_val<?php echo $row['id'];?>"><?php echo $row['age'];?></td>
  <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['id'];?>" value="edit" onclick="edit_row('<?php echo $row['id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['id'];?>" value="save" onclick="save_row('<?php echo $row['id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 <td><input type="text" id="new_name"></td>
 <td><input type="text" id="new_age"></td>
 <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
</table>

</div>
</body>
</html>