<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Charity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Organisation";
$result = $conn->query($sql);

if (isset($_GET["Org_ID"])) {
	$Org_ID = $_GET["Org_ID"];
}
if (isset($_GET["userID"])) {
	$userID = $_GET["userID"];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <div class="center">
    <form action = "history2.php" method='post'>
    <input type="hidden" name="Org_ID" value="<?php echo $Org_ID; ?>">
    <input type="hidden" name="userID" value="<?php echo $userID; ?>">
    <div class="amount-transfer">
    <label for="number">ENTER AMOUNT FOR FOOD:</label>
    <br><input type="number" placeholder="Enter amount" id='food' name='food'></br>
    <label for="number">ENTER AMOUNT FOR CLOTHES:</label>
    <br><input type="number" placeholder="Enter amount" id='clothes' name='clothes'></br>
    <label for="number">Extra cash contribution:</label>
    <br><input type="number" placeholder="Enter amount" id='cash' name='cash'></br>
    <br><button class="button">Submit</button></br>
    </form>
    </div>
    </div> 
</body>
</html>

 <style>
     body {
    font-family: "Montserrat";
    /* background-color: #60a9ff; */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;

}
    .center{
        margin:auto;
        margin-top: 10%;
        width: 57.5%;
        border: 3px solid #73AD21;
        padding: 10px;
        text-align: center;
        border: 3px solid #016ff9;
        background-color: #4169e1;
        height: 500px;
        border-radius: 25px;
    }

    html{
        line-height:2.5;
        letter-spacing:2px;
        font-size: larger;
        font-weight: bolder;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #e0ffff;
    }

.button{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #60a9ff, #38a7d3, #326fbe);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 0;
	cursor: pointer;
	transition: .5s;
}
.button:hover{
	background-position: right;
}

input[type=number] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    padding: 2px 20px; 
}

.amount-transfer{
        margin: auto;
        padding: 10px;
        text-align: center;
        border: 1px solid black;
        height: 470px;
        background-color:white;
        border-radius: 10px;
}

label{
        color: black;
        padding: 8px;
}

.number{
        order: 1.5px solid #9dd1ff;
        border-radius: 10px;
        color: #348efe;
        display: inline-block;
        padding: 17px 30px;
        text-decoration: none;
        margin: 25px 0;
        /* background-color: #48aaff; */
}

.input__box{
    width:800px;
    height: 400px;
    margin:0 auto;
    background-color: #f2f2f2;
    display: grid;
    place-items:center;
    position: relative;
}

.input__box  input{
    all:unset;
    width:600px;
    height:60px;
    border:1px solid grey;
    padding-left:55px;
    font-size:18px;
    color:#333;
    font-family:sans-serif;
    position:relative;
}

input:focus{
    outline:1px solid royalblue;
    border:none;
}

input[type="text"]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    font-size:18px;
    color:dimgrey;
    font-family:sans-serif;
}

input[type="text"]::-moz-placeholder{ /* Firefox 19+ */
    font-size:18px;
    color:dimgrey;
    font-family:sans-serif;
}

input[type="text"]:-moz-placeholder{ /* Firefox 18- */
    font-size:18px;
    color:dimgrey;
    font-family:sans-serif;
}

input[type="text"]:-ms-input-placeholder{ /* IE 10+ */
    font-size:18px;
    color:dimgrey;
    font-family:sans-serif;
}

input[type="text"]::placeholder { 
    font-size:18px;
    color:dimgrey;
    font-family:sans-serif;
}
</style>


