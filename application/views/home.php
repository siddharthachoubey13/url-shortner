<!DOCTYPE html>
<html>

<head>
	<title>URL SHORTNER</title>

	<!-- CSS styles for standard search box -->
	<style type="text/css">
		#tfheader {
			position: fixed;
			top: 50%;
			left: 50%;
			
		}

		#tfnewsearch {
			float: right;
			padding: 20px;
		}

		.tftextinput {
			margin: 0;
			padding: 5px 15px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			border: 1px solid #0076a3;
			border-right: 0px;
			border-top-left-radius: 5px 5px;
			border-bottom-left-radius: 5px 5px;
		}

		.tfbutton {
			margin: 0;
			padding: 5px 15px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			outline: none;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			color: #ffffff;
			border: solid 1px #0076a3;
			border-right: 0px;
			background: #0095cd;
			background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
			background: -moz-linear-gradient(top, #00adee, #0078a5);
			border-top-right-radius: 5px 5px;
			border-bottom-right-radius: 5px 5px;
		}

		.tfbutton:hover {
			text-decoration: none;
			background: #007ead;
			background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
			background: -moz-linear-gradient(top, #0095cc, #00678e);
		}

		/* Fixes submit button height problem in Firefox */
		.tfbutton::-moz-focus-inner {
			border: 0;
		}

		.tfclear {
			clear: both;
		}
	</style>
</head>

<body>
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form action="create_short_url" id="tfnewsearch" method="post"> 
			<input type="text" class="tftextinput" name="url" placeholder="Paste long URL here">
				<input type="submit" value="Create short URL" class="tfbutton">
		</form>
		<div class="tfclear"></div>
	</div>
</body>

</html>