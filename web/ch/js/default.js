$(function(){	
	$('#mainCarousel').carousel('cycle');

	$('#BlogFeed').FeedEk({
		Type:'Blog',
		Title : '最新消息',
		FeedUrl : 'http://www.embpcb.com/onlinec/web/rss', //Provide link to your blog rss feed here
		SourceUrl : 'http://blog.anujkumar.com', //Provide link to your blog here
		MaxCount : 3, //Maximum number of posts to diaplay
		ShowDesc : true,
		ShowPubDate: true,
		FooterText:'更多' //text to display in footer link
	});
	$('#TwitterFeed').FeedEk({
		Type:'Blog',
		Title : '最新活動',
		FeedUrl : 'http://www.embpcb.com/onlinec/web/rss',
		SourceUrl : 'http://www.twitter.com/anujkkk', //replace anujkkk with your twitter username
		MaxCount : 3, //maximum number of tweets to display
		ShowDesc : true,
		ShowPubDate: true,
		FooterText:'更多' //text to display in footer link
	});
	$('#btnMgmt').click(function(e) {
		$('.all').quicksand( $('.mgmt li'), {
			duration: 500,
			attribute: 'id',
			easing: 'easeInOutQuad'
		});
		$("#liMgmt").attr("class","active");		
		$("#liHacks").attr("class","");
		$("#liDesigns").attr("class","");
		$("#liAll").attr("class","");
		e.preventDefault();
	});
	$('#btnDesigns').click(function(e) {
		$('.all').quicksand( $('.designs li'), {
			duration: 500,
			attribute: 'id',
			easing: 'easeInOutQuad'
		});
		$("#liMgmt").attr("class","");
		$("#liAll").attr("class","");		
		$("#liHacks").attr("class","");
		$("#liDesigns").attr("class","active");
		e.preventDefault();
	});

	$('#btnHacks').click(function(e) {
		$('.all').quicksand( $('.hacks li'), {
			duration: 500,
			attribute: 'id',
			easing: 'easeInOutQuad'
		});
		$("#liMgmt").attr("class","");
		$("#liAll").attr("class","");		
		$("#liHacks").attr("class","active");
		$("#liDesigns").attr("class","");
		e.preventDefault();
	});
	$('#btnAll').click(function(e) {
		$('.all').quicksand( $('.everything li'), {
			duration: 500,
			attribute: 'id',
			easing: 'easeInOutQuad'
		});
		$("#liMgmt").attr("class","");
		$("#liAll").attr("class","active");		
		$("#liHacks").attr("class","");
		$("#liDesigns").attr("class","");
		e.preventDefault();
	});

	$('body').tooltip({
		selector: '[rel=tooltip]',
		placement: 'bottom'
	});

	$('LI h4').click(function(e) {
		e.preventDefault(); // disable text selection
		$(this).parent().find('span').slideToggle();
		return false; // disable text selection
	});

	$('#search').keyup(function(e) {
		var s = $(this).val().trim();
		if (s === '') {
			$('#result LI').show();
			return true;
		}
		$('#result LI:not(:contains(' + s + '))').hide();
		$('#result LI:contains(' + s + ')').show();
		return true;
	});

	 $('.imgOpacity').each(function() {
                $(this).hover(
                    function() {
                        $(this).stop().animate({ opacity: 1.0 }, 810);
                    },
                   function() {
                       $(this).stop().animate({ opacity: 0.3 }, 810);
                   })
                });

	$('a.ithumbnail').click(function(){
    var src = $(this).attr('href');
    var linksrc = $('a#linkSrc').attr('href');
	                     
	if (src != $('img#largeImg').attr('src').replace(/\?(.*)/,'')){
		$('img#largeImg').stop().animate({
			opacity: '0'
		}, function(){
			src = src+'?'+Math.floor(Math.random()*(10*100))
			$('a#linkSrc').attr('href',src);
			$(this).attr('src', src);
		}).load(function(){
			$(this).stop().animate({
				opacity: '1'
			});
		});
	}
    return false;
});

	
});
