<html>
<head>
<meta charset="utf-8">
<title>Evo local</title>
 <link type="text/css" href="/css/style.css" rel="stylesheet" media="all">
<style>
.debug{
border: 1px solid red;
}

</style>
</head>
<body>
	<div id="main">
		<div id="header" class="debug">
			<div id="logo">logo</div>
			<div id="login">
                <?php echo form_open('user/login');?>
                <?php echo form_label('email'); ?>
                <?php echo form_input('email');?>
                <?php echo form_label('password');?>
                <?php echo form_password('password');?>
                <?php echo form_submit('login');?>
                <?php echo form_close();?>

			</div>
		</div>
		<div id="container">
			<div id="left-slide">
				<!--<ul id="menu">
					<li><a href="#">Ням ням</a></li>
					<li> <a href="#">M</a></li>
					<li><a href="#">Other-1</a></li>
					<li><a href="#">Other-2</a></li>
					<li><a href="#">Other-3</a></li>
				</ul>-->
			</div>
			<div id="content" class="debug">
				<h5><?php echo sha1('superpassword')?></h5>

                
			</div>
			
		</div>
		
	</div>
</body>
</html>
