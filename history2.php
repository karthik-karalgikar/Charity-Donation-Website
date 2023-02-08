<?php

$userID = $_POST["userID"];
$Org_ID = $_POST["Org_ID"];
$food = $_POST["food"];
$clothes = $_POST["clothes"];
$cash = $_POST["cash"];

$conn = new mysqli('localhost','root','','Charity');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into transaction(userID, Org_ID, food, clothes, cash) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiii", $userID, $Org_ID, $food, $clothes, $cash);
		$execval = $stmt->execute();
		// echo $execval;
		$stmt->close();
        $conn->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
</head>
<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h2>Payments</h2>
            </div>
            <div class="panel-body">
                <form action="card.html" method="post">
                  <div class="form-group">
                    <label for="firstName"><h3>Credit Card/ Debit Cards</h3></label>
                    <button class="button">Enter Card details</button>
                </form>
                    <hr>      
            <div class="panel-upibody">
                <form action="upi.html" method="post">
                   <div class="form-group">
                    <label for="lastName"><h3>UPI/E-Wallets</h3></label>
                    <button class="button">Enter Details</button>     
                    </div> 
                </form>
            </div>
        </div>
    </div>

</body>
</html>


<style>
body {
    font-family: "inter";
    text-align: center;
    background-color: #60a9ff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container {
    max-width: 1050px;
    margin-inline: auto;
    padding-inline: 15px;
    padding-right: 12%;
}
.panel-body{
    background-color: white;
    text-align: center;
    display:  round block;
    border: solid;
    border-radius: 10px;
    padding: 35px 25px;
    width: 150%;
    max-width: 960px;
    display: flex;
    flex-direction: column; 
    text-transform: uppercase;
}
h3{
    text-align: center;
    font-weight: bolder;
    letter-spacing: 2.5;
    color: black;
    text-transform: uppercase;
}

h2{
    text-align: center;
    font-weight: bolder;
    letter-spacing: 2.5;
    color: black;
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
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.button:hover{
	background-position: right;
}

.panel-heading{
    font-family: "inter";
    text-align: center;
    padding-left: 65%;
    text-transform : uppercase;
    font-family: "inter";
}