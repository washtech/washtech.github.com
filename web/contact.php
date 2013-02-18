
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
			Contact - Get in touch
		</h3>
		 <div class="row">
			<div class="span9">
                <blockquote>
                        <p style="text-align:justify;">We value your feedback. To inquire about services found at CYESS Embedded Website, contact us by phone or e-mail, and we'll glady assist you according to our<a href="privacy-policy"> Privacy Policy</a>. Or you can fill out the form below to contact us and we will reply upon receipt of your message.</p>
                </blockquote>
			</div>
			 <div class="span3">
			 <img src="img/contact.jpg"  alt="">
			</div>
		 </div>
		<div class="row">
			<div class="span9">
<!--		<blockquote>
			<p style="text-align:justify;">We value your feedback. To inquire about services found at CYESS Embedded Website, contact us by phone or e-mail, and we'll glady assist you according to our<a href="privacy-policy">Privacy Policy</a>. Or you can fill out the form below to contact us and we will reply upon receipt of your message.</p>
		</blockquote>-->
		<div class="sectionTitle">Please use the form below to send us an email.</div>
                <form action="" method="post" class="contactform">
                        <div class="row">
                                <div class="span4">
                                        <label for="name"><i class="icon-user"></i><strong>Name</strong> (required)</label>
                                        <input name="name" value="" id="name" required="" type="text">
                                </div>
                                <div class="span4">
                                        <label for="email"><i class="icon-envelope"></i><strong>Email</strong> (required)</label>
                                        <input name="email" value="" id="email" required="" type="email">
                                </div>
                                <div class="span4">
                                        <label for="subject"><i class="icon-exclamation-sign"></i><strong>Subject</strong> (required)</label>
                                        <input name="subject" value="" id="subject" required="" type="text">
                                </div>
                        </div>
                        <label for="message"><i class="icon-pencil"></i><strong>Message</strong> (required)</label>
                        <textarea name="message" id="message" cols="100" rows="10" required=""></textarea>

                        <input class="btn btn-orange btn-large" value="Send Message" type="submit">
                </form>	
			</div>
			<div class="span3">
			<!--	<img src="img/contact.jpg"  alt="">-->
				<h3 class="dark" >Contact Us</h3>
				<address style="margin-bottom:15px;">
					<strong>CYESS, Co.,Ltd.</strong><br>
					1F.,No.3, Ln.188,<br>
                                                 Sec.1,Wenhua Rd.,<br>
                                                 Banqiao Dist.,New Taipei City 220, Taiwan (R.O.C)<br>
				</address>
				<i class="icon-phone"></i>  &nbsp;&nbsp;+886-2-82513250 <br>
                                        <i class="icon-print"></i>  &nbsp;&nbsp;+886-2-82513260 <br>
                                        <i class="icon-envelope"></i><a href="mailto:service@cyess.com"> &nbsp;&nbsp;service@cyess.com</a>
				<p>&nbsp;</p>
				<h3 class="dark">Business Hours</h3>
				<div class="row">
					<div class="span1">Mon - Fri</div>
					<div class="span2">: 9AM to 5PM</div>
				</div>
				<div class="row">
					<div class="span1">Saturday</div>
					<div class="span2">: 10AM to 2PM</div>
				</div>
				<div class="row">
					<div class="span1">Sunday</div>
					<div class="span2">: Closed</div>
				</div>
				
			</div>
		</div>
		<p>&nbsp;</p>
		<div class="sectionTitle">Our Location</div>
		<iframe width="940" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.tw/?ie=UTF8&amp;ll=25.019324,121.466641&amp;spn=0.001278,0.002071&amp;t=m&amp;z=19&amp;brcurrent=3,0x346802a89b3ec1db:0xb869014628c4b89b,1,0x345d5538b0b6645f:0x5aa90dfa6620edc0&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.tw/?ie=UTF8&amp;ll=25.019324,121.466641&amp;spn=0.001278,0.002071&amp;t=m&amp;z=19&amp;brcurrent=3,0x346802a89b3ec1db:0xb869014628c4b89b,1,0x345d5538b0b6645f:0x5aa90dfa6620edc0&amp;source=embed" style="color:#0000FF;text-align:left">檢視較大的地圖</a></small>
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

