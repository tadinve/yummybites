<html>

<body>

<p>

<?php 

//echo "<pre>"; //for displaying all variables in std class.
print_r($links);


foreach($results as $data)
{
?>
<div style="text-align:center"><img style=width:10% height=height:10% src="/ci/uploads/<?php echo $data->file; ?>" > <?php } ?></div>
	<div style="text-align:center"><?php echo $links; ?></div>
</p>
</body>
</html>