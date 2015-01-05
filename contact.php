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
						$action=$_REQUEST['action'];
						if ($action==""){
    					?>
    						<form  action="" method="POST" enctype="multipart/form-data">
    							<input type="hidden" name="action" value="submit">
   								Your name:<br>
    							<input class="input" name="name" type="text" value="" size="30"/><br>
    							Your email:<br>
    							<input class="input" name="email" type="text" value="" size="30"/><br>
    							Your message:<br>
    							<textarea class="input" name="message" rows="7" cols="30"></textarea><br>
    							<input id="submit" type="submit" value="Send email"/>
    						</form>
    						<?php
    					} else {
    						$name=$_REQUEST['name'];
    						$email=$_REQUEST['email'];
    						$message=$_REQUEST['message'];
    						if (($name=="")||($email=="")||($message=="")) {
        						echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        					} else {        
        						$from="From: $name<$email>\r\nReturn-path: $email";
        						$subject="Message sent using your contact form";
        						mail("belbosco.contact@gmail.com", $subject, $message, $from);
        						echo "Email sent! <a href=\"\">Have another question?</a>";
        					}
    					}  
						?>

					<h2>... or you can:</h2>
					<h4><a href="https://www.facebook.com/dratrwork?fref=ts" target="_blank">Find me on Facebook!</a></h4>
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