<?php
function conectarse ()
{
    if(!($link=mysql_connect("localhost","root","")))
{
 echo "Error conectando a la base de datos";
 exit()
}
if(!mysql_select_db("bdd_andresruiz",$link))
{
    echo "Error seleccionando la base de datos";
    exit()
}
return $link;
}

function edit($usuarios,$form_data,$field_id,$id){
	$sql = "UPDATE ".$usuarios." SET ";
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}
	$sql .= implode(',',$data);
	$sql.=" where ".$field_id." = ".$id."";
	return db_query($sql); 
}
?>