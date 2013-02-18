
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
			Product - Embedded CoreBoard	
		</h3>
		<div class="row">
			<div class="span4">
			 <?
				$_GET['page']="embedded-linux-training";
                                include_once("product-menu.php");
                        ?>
			</div>
			<div class="span8">
				<h3>Test1</h3>
				<div class="row">
                                        <div class="span6">
                                        <a href="#myModal" data-toggle="modal" style="outline:0;"><img id="largeImg" src="img/CoreTilt.png" class="img-rounded"/></a>
					
					<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  </div>
  <div class="modal-body">
	<img id="largeImg" src="img/CoreTilt.png" class="img-rounded"/>
  </div>
</div>


                                        </div>
                                        <div class="span2">
							<div class="thumbnail">
                                        		<a class="ithumbnail" href="img/CoreTilt.png"><img  src="img/CoreTilt.png" class="imgOpacity"/></a> </div>
							<div class="thumbnail">
							<a class="ithumbnail" href="img/CoreLight1.png"><img src="img/CoreLight1.png" class="imgOpacity"/></a> </div>
							<div class="thumbnail">
							<a class="ithumbnail" href="img/CoreMag.gif"><img src="img/CoreMag.gif" class="imgOpacity"/></a> </div>
                                        </div>
                                </div>
				<div class="row">
					<div class="span6">
				<blockquote>
				  <p class="justify">quis lectus. Donec vehicula risus eu nibh sodales malesuada vestibulum</p>
				</blockquote>
					</div>
				</div>
				<div id=servicesTabContent" class="tab-content">
                                <ul class="nav nav-tabs">
                                        <li class="active"><a href="#ecommerce" data-toggle="tab">Features</a></li>
                                        <li><a href="#socialmarketing" data-toggle="tab">Technical Specs</a></li>
                                        <li><a href="#ecommerce" data-toggle="tab">Documentation</a></li>
					<li><a href="#ecommerce" data-toggle="tab">Downloads</a></li>
                                        <li><a href="#socialmarketing" data-toggle="tab">FAQ</a></li>
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
		</div>
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

