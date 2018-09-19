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
}
#content{
    display:grid;
    /*grid-template-columns: 33.3% 33.3% 33.3%;
    grid-template-columns: 1fr 1fr 1fr ;*/
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(4,minmax(200px,auto));
    margin:0 auto;
}
#content div{
    background: #720245;
    padding:60px;
}
.main{
    grid-column: 2 / 3;
    grid-row:2 / 4;
    border-radius: 10px;
}
label{
    font-size:30px;
}
button{
    background-color: #ad9c3a; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 20px;
    border: 2px solid #fff; 
    margin:30px;
}
button:hover {
    background-color: #f7dc45; /* Green */
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
        <div class="main">
            <label>Login</label>
            <hr>
            <form action="../includes/LoginType.php">
            <section id="button">
                <button value="Teacher" name="btn">Login as Teacher</button>
            </section>
            <section id="button">
                <button value="Student" name="btn">Login as Student</button>
            </section> 
            </form>
            
        </div>
    </div>
</body>
</html>