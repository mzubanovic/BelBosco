<!DOCTYPE html>
<html>

<head>
	<?php require_once('includes/head.php') ?>
</head>
<body>
<?php require_once('includes/nav.php') ?>
<div id="wraper">
	<div id="wraper">
		<div id="headerWraper">

		</div>		
		<div class="main">
			<div class="row">
				<div class="col-md-6">
					<h2>You can contact me via contact form:</h2>
					
					<?php
						$action = $_REQUEST['action'];
						$required = array('name', 'email', 'message');

						foreach ($required as $value) {
							$data[$value] = !empty($_REQUEST[$value]) ? $_REQUEST[$value] : '';
						}

						if ( 
							empty($data['name']) || 
							empty($data['email']) || 
							empty($data['message']) 
							) {
								if(!empty($action)){
	        						$message = 'All fields are required, please fill <a href="">the form</a> again.';
								}
        					} else {        
        						$from="From: {$data['name']}<{$data['email']}>\r\nReturn-path: {$data['email']}";
        						$subject="Message sent using your contact form";
        						mail("belbosco.contact@gmail.com", $subject, $data['message'], $from);
        						$message = "Email sent! <a href=\"\">Have another question?</a>";
        						foreach ($required as $value) {
        							$data[$value] = '';
        						}
        					}

    					?>
						<form  action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="action" value="submit">
								Your name:<br>
							<input class="input" name="name" type="text" value="<?php echo $data['name']; ?>" size="30"/><br>
    							Your email:<br>
    							<input class="input" name="email" type="text" value="<?php echo $data['email']; ?>" size="30"/><br>
    							Your message:<br>
    							<textarea class="input" name="message" rows="7" cols="30"><?php echo $data['message']; ?></textarea><br>
    							<input id="submit" type="submit" value="Send email"/>
    						</form>
    						<?php echo $message; ?>
    				<div class="col-md-6">
						<h2>... or you can:</h2>
						<h4><a href="https://www.facebook.com/dratrwork?fref=ts" target="_blank">Find me on Facebook!</a></h4>
					</div>
					<div class="col-md-6">
						<h2> ... and:</h2>
						<h4><a href="https://www.etsy.com/shop/BelBosco?ref=hdr_shop_menu" target="_blank">Visit my shop on Etsy!</a></h4>
					</div>
				</div>
				<div class="col-md-6">
					<h2>... Also, you can contact my contributors:<h2>
					<h3>Visual identity design</h3>
					<h4>larakrupic@gmail.com</h4>
					<h3>Web developer</h3>
					<h4>mzubanovic@gmail.com</h4>
				</div>
			</div>
		</div>
		<?php require_once('includes/footer.php') ?>
	</div>

<?php require_once('includes/scripts.php') ?>

</html>