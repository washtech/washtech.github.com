
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
			聯絡我們 - Get in touch
		</h3>
		 <div class="row">
			<div class="span9">
                <blockquote>
				<p style="text-align:justify;">嵌揚科技 (CYESS) 非常重視您的回饋意見，根據我們的<a href="privacy-policy">隱私權政策</a>，我們非常樂意協助您，您可使用電話或E-Mail洽詢嵌揚科技 (CYESS) 所提供的嵌入式相關服務與嵌入式相關產品。或著您可透過填寫以下表格聯繫我們，我們將在收到您的訊息後儘快回覆您。</p>
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
		<div class="sectionTitle">請填寫以下表格</div>
                <form action="" method="post" class="contactform">
                        <div class="row">
                                <div class="span4">
                                        <label for="name"><i class="icon-user"></i><strong>姓名</strong> (必填)</label>
                                        <input name="name" value="" id="name" required="" type="text">
                                </div>
                                <div class="span4">
                                        <label for="email"><i class="icon-envelope"></i><strong>Email</strong> (必填)</label>
                                        <input name="email" value="" id="email" required="" type="email">
                                </div>
                                <div class="span4">
                                        <label for="subject"><i class="icon-exclamation-sign"></i><strong>標題</strong> (必填)</label>
                                        <input name="subject" value="" id="subject" required="" type="text">
                                </div>
                        </div>
                        <label for="message"><i class="icon-pencil"></i><strong>意見</strong> (必填)</label>
                        <textarea name="message" id="message" cols="100" rows="10" required=""></textarea>

                        <input class="btn btn-orange btn-large" value="送出意見" type="submit">
                </form>	
			</div>
			<div class="span3">
			<!--	<img src="img/contact.jpg"  alt="">-->
				<h3 class="dark" >聯絡我們</h3>
				<address style="margin-bottom:15px;">
					<strong>嵌揚科技有限公司 (CYESS)</strong><br>
					22041台灣新北市板橋區<br>
                                        文化路一段188巷3號1樓<br>
				</address>
				<i class="icon-phone"></i>  &nbsp;&nbsp;+886-2-82513250 <br>
                                        <i class="icon-print"></i>  &nbsp;&nbsp;+886-2-82513260 <br>
                                        <i class="icon-envelope"></i><a href="mailto:service@cyess.com"> &nbsp;&nbsp;service@cyess.com</a>
				<p>&nbsp;</p>
				<h3 class="dark">上班時間</h3>
				<div class="row">
					<div class="span1">週一 - 五</div>
					<div class="span2">: AM8:00 - PM5:00</div>
				</div>
				<div class="row">
					<div class="span1">週六</div>
					<div class="span2">: AM9:00 - PM5:00</div>
				</div>
				<div class="row">
					<div class="span1">週日</div>
					<div class="span2">: 休息</div>
				</div>
				
			</div>
		</div>
		<p>&nbsp;</p>
		<div class="sectionTitle">位置</div>
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

