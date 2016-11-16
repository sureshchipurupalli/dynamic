<?php

include('dbconfig.php');
include('administrator/includes/dbconnection.php');



 $id=$_GET['q'];
 echo $id;

 $query="select * from tb_departments where cat_id=".$id."";
  $res123=$callConfig->getAllRows($query);
  //print_r($res123);
  
  
  
  
 
  
  $data.='<div class="form-group"><label class="control-label col-lg-4"><strong>Department:<strong></label>';

$data.='<div class="col-lg-4"><select id="subcat" name="department" class="category" >';

$data.='<option value="">Select Department</option>';

foreach($res123 as $res1234)

{

	$data.='<option value="'.$res1234->id.'">'.$res1234->department_name.'</option>';	

}

$data.='</select></div></div>';





echo $data;

?>
  
  
  
  </select>
  

