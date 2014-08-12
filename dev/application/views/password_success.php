<html>
<head>
<title>Password_success</title>
</head>
<body >
<div class="wrapper">
				<div class="container" style="background-color:white;">

<center><img src="<?php echo $this->config->base_url(); ?>img/awsome.gif"  alt="Smiley face">
<h1 style="color:orange; text-align:center;">Congratulations!!</h1>

<h3 style="color:orange; text-align:center;">You have successfully changed your password!</h3>

<p style="color:orange; text-align:center;"><?php echo anchor('welcome/dashboard', 'Try it again!'); ?></p>
</center>
</div>
</div>
</body>
</html>