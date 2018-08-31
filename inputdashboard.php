<!DOCTYPE html>
<html>
<head>
<style type="text/css">
		.a1
		{
			text-align: left;
			margin-left: 70px;
			color: #fff;	
			padding-top:  15px;
			padding-bottom: 20px;
		}
		.a2 input
		{
			text-align: left;
			margin-left: 70px;
		}
		.a2
		{
			padding-top:  15px;
			padding-bottom: 20px;
			color: #a2a3a5;
		}
		.container 
		{
    		width: 400px;
    		/*margin: 0 auto;*/
   		 	position: absolute;
    		top: 20%;
    		left: 30%;
    		background: rgba(0, 0, 0, 0.46);
    		/*background: transparent;*/
    		padding: 10px;
    		/*transform: translate(-50%,-50%);*/
		}
		body 
		{
    		font-family: 'Ubuntu', sans-serif;
    		background: url("http://www.wallpapersshock.com/uploads/large/hd-computer/free-geometric-shapes-3d-hd-wallpapers-download.jpg") no-repeat;
		    background-size: cover;
    		height: 100vh;
    		margin: 0;
    		overflow: hidden;
		}
		.a1 input 
		{
    		padding: 5px 0;
    		border: 0;
    		border-bottom: 1px solid #fff;
    		background: transparent;
    		width: 80%;
    		text-align: center;
    		outline: none;
    		color: #ffffff;
    		font-family: 'Ubuntu', sans-serif;
    		text-shadow:3px 3px 3px rgba(51, 51, 51, 0.6)
		}
		.a1 input::-webkit-input-placeholder 
		{
    		color: #a2a3a5;
  			text-shadow:1px 1px 1px rgba(51, 51, 51, 0.6)
		}

	</style>
</head>
<body>
<div class="container">
	<form method="POST" action="dashboardcontents.php">
	<h2 style="text-align: center;color: #a2a3a5;"><i>enter table data</i></h2>
	
	<div class="a1">	
		<input type="number" id="account_id" name="account_id" placeholder="account_id">
	</div>
	
	
	<div class="a1">
		<input id="card_number_hash" type="text" name="card_number_hash" placeholder="card_number_hash">	
	</div>
	
	<div class="a1">
		<input  id="created_on" id="created_on" name="created_on" placeholder="created_on" >
	</div>
	
	<div class="a2">
		<input  style="background: #a2a5aa" value="submit" type="submit">
		<button style="margin-left: 120px;background: #a2a5aa" type="reset" value="reset">Reset</button>
	</div>
</form>
</div>
</body>
<script type="text/javascript">
 now = new Date();
 year = "" + now.getFullYear();
 month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
 day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
 hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
 minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
 second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }
 dt =  year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
 document.getElementById("created_on").value= dt ;
</script>
</html>