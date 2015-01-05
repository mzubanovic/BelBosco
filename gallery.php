
<!DOCTYPE html>
<html>

<head>
	<?php require_once('includes/head.php') ?>
</head>
<body>
<?php require_once('includes/nav.php') ?>

<div id="wrapper">
		<div id="headerWraper">
				
		</div>
	<div class="main">
		<div class="container">
				<div class="row gallery-row">
					<div class="col-sm-2">
						<a class="group1" href="images/barka.jpg" title="Boat on the lake">
							Boat on the lake<img src="images/thumbnails/barkaT.jpg" alt="Boatonthelake" class="thumbnail"/>					
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/blackandwhite.jpg" title="Ship - Black&White">
							Ship - Black&White<img src="images/thumbnails/blackandwhiteT.jpg" alt="Ship - Black&White" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/brod1.jpg" title="Ship at sunset">
							Ship at sunset<img src="images/thumbnails/brod1T.jpg" alt="Ship at sunset" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/brod2.jpg" title="Ship, grayscale">
							Ship, grayscale<img src="images/thumbnails/brod2T.jpg" alt="Ship, grayscale" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/cres1.jpg" title="Cres 1">
							Cres 1<img src="images/thumbnails/cres1T.jpg" alt="Cres1" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/cres2.jpg" title="Cres 2">
							Cres 2<img src="images/thumbnails/cres2T.jpg" alt="Cres 2" class="thumbnail"/>
						</a>
					</div>
				</div>
				<div class="row gallery-row">
					<div class="col-sm-2">
						<a class="group1" href="images/cres3.jpg" title="Cres 3">
							Cres 3<img src="images/thumbnails/cres3T.jpg" alt="Cres 3" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/cres4.jpg" title="Cres 4">
							Cres 4<img src="images/thumbnails/cres4T.jpg" alt="Cres 4" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/cres5.jpg" title="Cres 5">
							Cres 5<img src="images/thumbnails/cres5T.jpg" alt="Cres 5" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/kamen1.jpg" title="Stone">
							Stone house<img src="images/thumbnails/kamen1T.jpg" alt="Stone" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/kip1.jpg" title="Statue 1, Zagreb">
							Statue 1, Zagreb<img src="images/thumbnails/kip1T.jpg" alt="Statue 1, Zagreb" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/kip2.jpg" title="Statue 2, Zagreb">
							Statue 2, Zagreb<img src="images/thumbnails/kip2T.jpg" alt="Statue 2, Zagreb" class="thumbnail"/>
						</a>
					</div>
				</div>
				<div class="row gallery-row">
					<div class="col-sm-2">
						<a class="group1" href="images/kip3.jpg" title="Statue 3, Zagreb">
							Statue 3, Zagreb<img src="images/thumbnails/kip3T.jpg" alt="Statue 3, Zagreb" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a class="group1" href="images/kolekcija.jpg" title="Collection">
							Collection<img src="images/thumbnails/kolekcijaT.jpg" alt="collection" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/park.jpg" title="Park">
							Park<img src="images/thumbnails/parkT.jpg" alt="Park" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/ribar.jpg" title="Fisherman">
							Fisherman, mist<img src="images/thumbnails/ribarT.jpg" alt="Fisherman" class="thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<a class="group1" href="images/sljeme.jpg" title="Sljeme">
							Sljeme, Zagreb<img src="images/thumbnails/sljemeT.jpg" alt="Sljeme" class="thumbnail"/>
						</a>
					</div>
				</div>
		</div>
	</div>
	<?php require_once('includes/footer.php') ?>
</div>
  			
</body>
<?php require_once('includes/scripts.php') ?>
<script> 
	$(document).ready(function(){
		$(".group1").colorbox({rel:'group1'});
	}); 
</script>
</html>