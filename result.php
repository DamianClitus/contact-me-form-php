<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Namnlöst dokument</title>
</head>
<body>
    <h1>Lista på alla bokningar i "Daniel's kontakt"</h1>
        <?php
            require 'data.php';
            
            // Create connection
            $conn    	= Connect();
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM daniel_kontakt";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["fNamn"]. " " . $row["eNamn"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>
