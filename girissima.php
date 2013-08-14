	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GIRISSIMA.COM</title>
	  
	    <link rel="stylesheet" href="http://www.girissima.com/static/application/styles/fonts/lato/index.css"/>
	<link rel="stylesheet" href="http://www.girissima.com/static/application/styles/fonts/awesome/index.css"/>
	<link rel="stylesheet" href="http://www.girissima.com/static/public/css/application.css"/>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


	<style  >

	body{
		background-color: #000;
		
	}
	*{
		background-color: #000;
		color: #f3f3f3 !important;
	}
	</style>

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
	 <body id="default" class="default" style="zoom: 1;">
	  


	 




	<div id="content_inner" class="content"><form id="frmSubscribe" action="http://www.girissima.com/pt/newslleter/subscribe/" method="POST">
	  <div>
	  		<div class="titulo"><p><h2>SIGN UP FOR OUR</h2></p><p><h1>NEWSLETTER</h1></p></div>
	  		<div class="subTitulo"><p>texto qualquer aqui dentro por cusa de qualquer coisa ipsum lorem asq slkdjs dsfh rgh regerij g</p></div>
	  		<div>
	  		<table><tr>
	  		<td><label for="txtFirstName">FIRST NAME*</label><input type="text" name="firstName" id="txtFirstName"></td><td>
	  			<label for="txtLastName">LAST NAME*</label><input type="text" name="lastName" id="txtLastName">

	  		</td></tr>
	  		<tr>
	  		<td colspan="2"><label for="txtEmail">EMAIL ADDRESS*</label><input type="text" name="email" id="txtEmail"></td></tr>
			</table>

			</div>


	</div>
	<input type="submit" id="btnSubmit" value="IT'S DONE" />
	</form>
	  </div>

<div class="header row">
  <div class="five columns">
    <h2 ><a style="color:#fff" href="/pt/">GIRISSIMA<strong style="color:#fff">.</strong><span style="color:#fff">com</span></a></h2>
    <h6 class="subheader" style="color:#fff">Collectible fashion to love and to last</h6>
  </div>


 
  </div>
  
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
	//FB.Canvas.setAutoResize();
	}



	$('#frmSubscribe').submit(function(){
	    
	    $.ajax({
	        url: $(this).attr('action'),
	        type: $(this).attr('method'),
	        data: $(this).serialize(),
	        success: function(html) {
	        	alert(html);
	        }
	    });
	    return true; 
	});

	</script>


	</body>
	</html>