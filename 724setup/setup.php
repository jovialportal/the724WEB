<?php include ('724css/css.php');?>
<?php include ('724js/js.php');?>


<?php
#extablishing a connection to the data base.....
$dbc=mysqli_connect('localhost','tayot','kingskid','tyweb' )OR die('could not connect because;'.mysqli_connect_error());

#constant for naavigation..
DEFINE('D_TEMPLATE', '724templates');




#functons
include('724functions/data.php'); #database connection
include('724functions/template.php');#navigation

$site_title="temi724";
#settiing pageid to page given in the url
if(isset($_GET['page'])){

$pageid= $_GET['page'];
#set page id to be 1 or homepage
}  else {
$pageid=1;    
}
#page setup..go to functions/data for more information on this.
$page= data_page($dbc, $pageid);





