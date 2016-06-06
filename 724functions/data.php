<?php
#this code(function) draws the pages directly from database 
function data_page($dbc, $id){
    
//starting a query to get content from the database...
$q="SELECT * FROM pages WHERE id=$id";
$r=mysqli_query($dbc,$q);
$data=mysqli_fetch_assoc($r);
 
#wrapping coditions for html or no html.
$data['body_nohtml']=  strip_tags($data['body']);
if ($data['body']==$data['body_nohtml']) {

$data['body_format'] ='<p>'.$data['body'].'</p>';    
}
else{
    $data['body_format']=$data['body'];
}




return $data;
    
}

