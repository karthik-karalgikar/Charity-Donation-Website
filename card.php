<?php

$cardNO = $_POST["cardNO"];
$expDate = $_POST["expDate"];
$nameOnCard = $_POST["nameOnCard"];

$conn = new mysqli('localhost','root','','Charity');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into card(cardNO, expDate, nameOnCard) values(?, ?, ?)");
		$stmt->bind_param("iss", $cardNO, $expDate, $nameOnCard);
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
    <title>home page</title>
</head>
<body>
    <div class="container">
    <div class="panel panel-primary">
            <div class="panel-heading text-center">
            <div class="panel-body">
                <h1>Congratulations!</h1>
            <hr>
        <h2>Payment successful!</h2>
        <h3>Your generosity is truly appreciated and will make a real difference 
            in the lives of those we serve. 
            Thank you for your support.</h3>

    <a href="homepage.html" class="button">return to home page</a>
</div>
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
    padding-right: 67%;
}
.panel-body{
    background-color: white;
    text-align: center;
    display:  round block;
    border: solid;
    border-radius: 10px;
    padding: 35px 25px;
    width: 500%;
    max-width: 960px;
    display: flex;
    flex-direction: column; 
    text-transform: uppercase;
}
h3{
    font-style: italic;
    text-align: center;
    font-weight: normal;
    letter-spacing: 2.5;
    color: black;
}

h2{
    text-align: center;
    font-weight: bolder;
    letter-spacing: 2.5;
    color: black;
}



.button{
    border: 2px solid #9dd1ff;
    border-radius: 10px;
    color: #348efe;
    display: inline-block;
    padding: 17px 30px;
    text-decoration: none;
    margin: 25px 0;
    transition: background-color 200ms ease-in-out;
    background-color: #48aaff;
    color: black;
    text-align: center;
    margin: auto;
    display: flex;
    }
.button:hover,.button:focus{
    background-color: #e1f1ff ;
    }

.panel-heading{
    font-family: "inter";
    text-align: center;
    padding-left: 65%;
    text-transform : uppercase;
    font-family: "inter";
}
