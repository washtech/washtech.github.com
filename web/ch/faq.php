
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
			FAQ - Questions?
			<div class="input-append pull-right">
				<input id="search" type="text" placeholder="Enter search term ...">
				<button class="btn btn-orange" type="button">Search</button>
			</div>
		</h3>
		<div id="faq">
			<ul id="result">
				<li>
					<h4><div class="rn">1</div> How can I get my own domain name?</h4>
					<span class="active">The Internet Corporation for Assigned Names and Numbers (ICANN) maintains a list of accredited registrars . Any of the companies on this list can register a domain name for you.</span>
					<hr/>
				</li>
				<li>
					<h4><div class="rn">2</div> How can I block my hosting service's advertisements?</h4>
					<span>Check the Terms of Service (TOS) agreement for your hosting service. It almost certainly prohibits interfering with the advertisements they add to your web pages. If you use some trick to block their advertisements on your own, then your hosting service may delete your account for violating its TOS.</span>
					<hr/>
				</li>
				<li>
					<h4><div class="rn">3</div> How do I redirect someone to another page?</h4>
					<span><p>The most reliable way is to configure the server to send out a redirection instruction when the old URL is requested. Then the browser will automatically get the new URL. This is the fastest and most efficient way, and is the only way described here that can convince indexing robots to phase out the old URL. For configuration details consult your server admin or documentation (with NCSA or Apache servers, use a Redirect statement in .htaccess).</p>
					<p>If you can't set up a redirect, there are other possibilities. These are inferior because they tell the search engines that there's still a page at the old location, not that the page has moved to a new location.</p></span>
					<hr/>
				</li>
				<li>
					<h4><div class="rn">4</div> How do I password protect my web site?</h4>
					<span><p>Password protection is done through HTTP authentication. The configuration details vary from server to server, so you should read the authentication section of your server documentation. Contact your server administrator if you need help with this.</p>
					<p>JavaScript password scripts provide only a facade of security. At a fundamental level, they work in one of two ways. Some scripts convert the password into a URL, which keeps the document secret by limiting the number of people who know its URL. Some scripts check the password and then go to a specific URL, which protects the document only from those who don't view the JavaScript source to get the URL of the document. Neither mechanism is really secure.</p></span>
					<hr/>
				</li>
				<li>
					<h4><div class="rn">5</div> How can I disable the browser's right-click options?</h4>
					<span>These scripts annoy visitors who lose ready access to their browsers' normal context-menu functions (e.g., "Open in new window" or "Bookmark link"). These scripts can also interfere with features like mouse gestures. Nothing (including these scripts) can prevent anyone from copying your source or images. The browser cannot display your document without the source and images, so your web server must send them to the browser. Even without the various "save" functions in today's browsers, someone can retrieve your source or images from the browser's cache, request them from the server with some other tool, or use a screen-capture tool to copy the images. These scripts do nothing when JavaScript is disabled or unavailable, when JavaScript access to right-click events is disabled, on systems without mice, or on systems with single-button mice.</span>
					<hr/>
				</li>
			</ul>
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

