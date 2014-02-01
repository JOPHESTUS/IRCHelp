
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Generator</title>
    <meta name="description" content="Support page gen">
    <meta name="keywords" content="live chat help irc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
         However, there is a blank style.css in the css directory should you prefer -->
    <link rel="stylesheet" href="http://lol768.com/IRCHelp/css/gumby.css">
<style>
.bigger{
font-size: larger;
width: 320px;

}
.long{
font-size: larger;
width: 500px;

}

</style>

</head>


<body>



<div class="row" id="content">
    <br>
    <div class="sixteen columns">
        <h1>Live chat support link generator</h1>

	<br>
	<h3>Plugin Name</h3>
	<input class="bigger" type="text" id="plugin" name="plugin">
	<br>	<br>
	<h3>Support Channel (without #)</h3>
	<input type="text" class="bigger" id="chan" name="chan">
		<br>	<br>
        <div class="medium success btn pretty-subtle"><a id="link" href="#link">Create!</a></div><br />
		
		<h3 id="yer"></h3>
		<input type="text"  class="bigger long" id="fin" name="fin" readonly="true">
		<p id="yer2"></p>
    </div>
</div>

<!-- Grab Google CDN's jQuery, fall back to local if offline -->
<!-- 2.0 for modern browsers, 1.10 for .oldie -->
<script>
    var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
    if (!oldieCheck) {
        document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
    } else {
        document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
    }
</script>
<script>
    if (!window.jQuery) {
        if (!oldieCheck) {
            document.write('<script src="http://lol768.com/IRCHelp/bower_components/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
        } else {
            document.write('<script src="http://lol768.com/IRCHelp/bower_components/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
        }
    }
</script>

<script type="text/JavaScript" src="http://lol768.com/IRCHelp/js/gumby.min.js"></script>
<script>
  jQuery(function () {
        $("#link").click(function() {
		var plugin = $("#plugin").val();
		var chan = $("#chan").val();
  $("#yer").text("Here you go!"); 
   $("#yer2").text("Copy this link and put it on your DBO page, site or whatever!"); 
			$("#fin").val("http://jophest.us/IRCHelp/?plugin=" + plugin + "&chan=" + chan);
        });
		
   $("#fin").focus(function () {
            var $this = $(this);
            $this.select();

            // Work around Chrome's little problem
            $this.mouseup(function () {
                // Prevent further mouseup intervention
                $this.unbind("mouseup");
                return false;
            });
        });
	
});



	  
</script>

</body>
</html>
