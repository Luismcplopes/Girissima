<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YOUR PAGE TITLE HERE</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
window.fbAsyncInit = function() {
FB.Canvas.setSize();
}
// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
FB.Canvas.setSize();
}
</script>

<base target='_blank' />
</head>

<body>

<div id="container">
   
  START YOUR CODING HERE

</div>


<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
appId : '347360425306472',
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});

window.fbAsyncInit = function() {
FB.Canvas.setAutoResize();
}
</script>


</body>
</html>