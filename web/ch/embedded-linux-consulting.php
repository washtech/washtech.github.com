
<!DOCTYPE html>
<html lang="en">

<head>
	<?
        include_once("meta.php");
        ?>
</head>
<body>
	<div class="top_bar"></div>
	<div class="container" style="min-height:370px;">
		<?
                include_once("header.php");
                ?>	
		<h3 class="pageTitle">
			Services - Embedded System Consulting Service
		</h3>
		<div class="row">
			<div class="span4">
				<?
				$_GET['page']="embedded-linux-consulting";
				include_once("service-menu.php");
				?>
			</div>
			<div class="span8">
				<h3>Test2</h3>
				<p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla convallis semper. Proin tristique ornare adipiscing. Integer tempor quam vitae lacus molestie cursus in sed orci. Maecenas mi mauris, ullamcorper porttitor pulvinar et, interdum ac nulla. Sed velit augue, consequat sit amet aliquam vitae, egestas sed dui. Mauris quis mauris id sem laoreet gravida elementum hendrerit diam. Nullam feugiat, lectus sed porta consequat, nisl sapien sodales ipsum, vel fringilla enim quam non eros. Pellentesque ultricies augue quis felis convallis eget fermentum sapien cursus. Vivamus nunc nibh, imperdiet id semper non, adipiscing quis lectus. Donec vehicula risus eu nibh sodales malesuada vestibulum</p>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#ecommerce" data-toggle="tab">Home</a></li>
				 	<li><a href="#socialmarketing" data-toggle="tab">Profile</a></li>
  					<li><a href="#ecommerce" data-toggle="tab">Messages</a></li>
		  			<li><a href="#socialmarketing" data-toggle="tab">Settings</a></li>
				</ul>
				<div id=servicesTabContent" class="tab-content">
					<div class="tab-pane fade active in" id="ecommerce">
					 <p class="justify">1</p>
					</div>
				<div class="tab-pane fade" id="socialmarketing">
					<div class="tab-pane fade active in" id="ecommerce">
                                         <p class="justify">2</p>
                                        </div>
				</div>
			</div>
		</div>
		<p class="spacer">&nbsp;</p>

	</div>



	</div>
	<?
        include_once("footer.php");
        ?>
	<script src="js/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/feedek.js"></script>
	<script src="js/default.js"></script>
</body>
</html>

