
<?php include
('724setup/setup.php');?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title><?php echo $page['title'].' | '.$site_title;?></title>
</head>
<body>
<!--navigation-->
<?php include(D_TEMPLATE.'/navigation.php');?>

<!--container for content area-->
<div class="container">
    
    <div class="jumbotron">
  
  
  
</div>
<h1><?php echo $page['header'];?></h1>
<?php echo $page['body_format'];?>
</div><!--end of container-->

<!--footer-->
<?php include(D_TEMPLATE.'/footer.php');?>




</body> 
</html>
