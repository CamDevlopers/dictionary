<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo base_url();?>manages/do_leng" method="post">
	Name: <input type="text" name="test">
	<?php echo form_error('test');?>
	<input type="submit" name="submit"/>
</form>
</body>
</html>