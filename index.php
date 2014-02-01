<?php

$chan = 'hawkfalcon';
if (isset($_GET['plugin'])) {
$plugin = $_GET["plugin"];

}else{
$plugin = '{plugin}';
}

if (isset($_GET['chan'])) {
$chan = $_GET["chan"];

}else{
$chan = 'hawkfalcon';
}


?>

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

    <title>Live chat help for <?php echo($plugin); ?></title>
    <meta name="description" content="Support page for <?php echo($plugin); ?>">
    <meta name="keywords" content="<?php echo($plugin); ?> live chat help irc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
         However, there is a blank style.css in the css directory should you prefer -->
    <link rel="stylesheet" href="http://lol768.com/IRCHelp/css/gumby.css">

    <script src="http://lol768.com/IRCHelp/bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>
<div id="lc">
    <iframe src="http://webchat.esper.net/?nick=&channels=<?php echo($chan); ?>&fg_color=DDDDDD&fg_sec_color=999999&bg_color=111111"></iframe>
</div>
<div class="row" id="content">
    <br>
    <div class="sixteen columns">
        <h1>Live chat support for <?php echo($plugin); ?></h1>
        <p>If you're looking for help with <?php echo($plugin); ?>, you're in the right place. Before we get started, <strong>please read <em>all</em> the info below</strong>.</p>
        <h2>We're all volunteers</h2>
        <p>Please keep in mind that everyone you talk to is a volunteer. None of us are paid to provide support for <?php echo($plugin); ?> - we do it simply because we enjoy helping people with the plugin. Please be polite when interacting with people.</p>
        <h2>We're not mind-readers</h2>
        <p>When you ask a question, please supply <strong>as much info as possible</strong>. If you're encountering a bug, please tell us the plugin version, CraftBukkit version (run /version in the console and give us the output) and any additional information. If you see a stack trace or error in the console, please put it on <a href="http://pastebin.com">a pastebin</a> and give us the link so we can look at it. Try to provide as much information as possible when you first enter the channel so we don't need to ask a huge number of follow-up questions.</p>
        <h2>We have lives</h2>
        <p>Whatever you do, <strong>please do not join, wait 5 seconds for a response and then quit</strong>. We all have lives (or like to think so) and as such we may be doing other things while we have IRC open. You should connect, ask your question and wait as long as possible for a response. You can leave this browser window open and we'll notify you (this will play a small sound and change the tab title) when we see your question. <strong>If you connect and cannot be bothered to wait at least 30 minutes for a response you're unlikely to receive one.</strong></p>
        <h2>Do not flood the chat</h2>
        <p>Once you have sent your message, IRC relays it to everyone in the channel. Repeatedly sending the same message is seen as spamming or flooding the chat and will not mean you get a faster response. Instead, you're likely to be kicked or banned. Similarly, IRC allows you to send more than one word in a message. Don't use the enter key as punctuation - we're happy to wait while you write a longer message if it results in less spam to the channel.</p>
        <h2>Proceeding to the channel</h2>
        <p>If you feel you've read and understood all of the above information, please double click the button below. Thank you for taking the time to make our and your lives easier.</p>
        <div class="medium success btn pretty-subtle"><a id="link" href="#link">Proceed!</a></div><br /><br />
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
    $(function () {
        $("#link").click(function() {
           $("#link").text("Please read the above info");
            $("#link").parent().addClass("info");
            $("#link").parent().removeClass("success");
        });
        $("#link").on("dblclick", function() {
            $("#link").text("Loading...");
            $("#lc").show();
            $("#content").hide();
            $("#link").parent().addClass("success");
            $("#link").parent().removeClass("info");
        });
    });
</script>
</body>
</html>
