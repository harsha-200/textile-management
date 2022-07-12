<html>
<body>
<h1>maga dbms banta</h1>
<style="text/css">
</style>
<?php
$servername = "localhost:3307";
$username ="root";
$password ="";
$dbname="textile_management";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT *
 FROM BRANCH";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1><p>BID: " . $row["BID"]."<br>". "BRANME: " .$row["BRNAME"]."<br>"."BRADDRESS: ".$row["BRADDRESS"]."<br>"."BRPHONE: ".$row["BRPHONE"]."<br></h1></p>";
  }
} 
else {
  echo "0 results";
  }
$conn->close();
?>
</body>
</html> 