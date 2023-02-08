
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','Charity');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(firstName, lastName, email, password, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $number);
		$execval = $stmt->execute();
		$stmt->close();
	}

$sqlforuserid = "SELECT ID FROM user where email = '$email' and password = '$password'";
$res = $conn->query($sqlforuserid);
$row = $res->fetch_assoc();
$userID = $row['ID'];

$sql = "SELECT * FROM Organisation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="center">
    <table>
        <thead>
            <th style = "width:10px">Org_ID</th>
            <th style = "width:30px">Org_name</th>
            <th style = "width:10px">Org_Phone</th>
            <th style = "width:40px">Org_Address</th>
            <th style = "width:10px">Select Organisation</th>
        </thead>
<?php

    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    echo '
    <tr>
        <td>'.$row["Org_ID"].'</td>
        <td>'.$row["Org_name"].'</td>
        <td>'.$row["Org_Phone"].'</td>
        <td>'.$row["Org_Address"].'</td>
        <td><a href="transact2.php?Org_ID='.$row['Org_ID'].'&userID='.$userID.'"
        <button type="button" class="user-button">Donate</button>
        </a></td>
    </tr>';
    }

?>
 </table>
    </div>
<?php
    }
$conn->close();
?>
<script>
    alert("Login Successful");
</script>

<html>
<style>
    table, th, td{
        box-shadow: 2px 2px 10px black;
        border-radius: 0.1px;
        font-weight: bold;
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid;
        width: 100%;
        border-collapse: collapse; 
        text-align: center; 
        height: 150px;
    }

    th, td{
        height:70px;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    td:nth-child(4) {
    width: 500px;
}


    .address{
        column-width = 100px;
    }

    th{
        background-color: #60a9ff;
    }
    
    .center {
        margin: auto;
        width: 57.5%;
        border: 3px solid #73AD21;
        padding: 10px;
        text-align: center;
        border: 3px solid black;
    }
    .user-button{
    border: 2px solid #9dd1ff;
    border-radius: 10px;
    color: #348efe;
    display: inline-block;
    padding: 5px 25px;
    text-decoration: none;
    margin: 25px 0;
    transition: background-color 200ms ease-in-out;
    }
    .user-button:hover,.user-button:focus{
    background-color: #e1f1ff ;
    }

    html{
    background-color: #e0ffff;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
    </style>
    </html>
