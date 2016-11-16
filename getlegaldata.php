<?php

include('dbconfig.php');
include('administrator/includes/dbconnection.php');



 $id=$_GET['text1'];
 //echo $id;

  echo $query="select * from tb_legal where sid=".$id."";
  $res123=$callConfig->getAllRows($query);
  //print_r($res123);exit;
  
  
  foreach($res123 as $res1234)

{

  
 
  
  $data.='<div class="getlegal_delivery">';

$data.='<span class="legal_para1">User Name</span>';

$data.='<strong>"' .ucfirst($res1234->name).'"</strong>';

$data.='</div>';

$data.=' <div class="legal_amount1">';

$data.='<span class="legal_para1">Compliant Title</span>';

$data.='<p >"'.ucfirst($res1234->address).'"</p>';

$data.='</div>';

$data.=' <div class="legal_fund_escrow">';

$data.='<span class="para1">price</span>';

$data.='<p >"'.ucfirst($res1234->cases_handled).'"</p>';

$data.='</div>';

}

echo $data;

?>








  
  
  
  
  

