<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
body{
	color:#fff;
	text-align: center;
	font-family: Arial;
	margin-top:100px;
}
#content{
	display:grid;
	/*grid-template-columns: 33.3% 33.3% 33.3%;
	grid-template-columns: 1fr 1fr 1fr ;*/
	grid-template-columns: repeat(3, 1fr);
	grid-auto-rows: repeat(2,1fr);
	grid-row-gap: 0.5px;
	
}
#content div{
	background: #720245;
	padding:30px;
}
.header{
	grid-column: 2 / 3;
	align-items: end;
	font-size: 30px;
	font-weight: bold;
	padding:10px;
}
.form{
	grid-column: 2 / 3;
}
#inputs{
	display: grid;
	grid-template-columns: repeat(1,1fr)
}
label {
	font-size:20px;
}
input{
	font-size:20px;
}
#submit input{
	/*background-color: success;*/
	font-size: 30px;
	width:200px;
}
button{
    background-color: #ad9c3a;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 20px;
    border: 2px solid #fff; 
}
button:hover {
    background-color: #f7dc45;
    color: white;
    cursor: pointer;
}
button:active { 
    background-color: #4CAF50;
}

</style>
</head>
<body>
	<div id="content"> 
		<div class="header">Quiz Zone</div>
		<div class="form">
			<form id="inputs" action="../includes/LoginHandler.php" method="Post">
				<div id="emailid">
					<label>Email-id:  </label>
					<input type="email" name="email"><br>
				</div>
				<div id="pass">
					<label>Password:</label>
					<input type="password" name="password"><br>
				</div>
				<div id="submit">
					<button type="submit">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>