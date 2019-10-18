<?php
    //$servername = "localhost";
 $servername="172.16.131.125";
 $username="02_kos";
 $password="dzikisad15";
 $dbname="02_kos";
    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connetion
/* if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";*/
 $sql = "SELECT * FROM bibl_autor";
    //echo("<li>".$sql);
 $result = mysqli_query($conn, $sql);
//print_r($result);
// output data of each row
echo("<table border=1>");
                echo("<tr><th>autor</th>");
                    while( $row = $result ->fetch_assoc() ) {
                            echo("<tr>");
                            echo( "<td>".$row['autor']."</td>");
                            echo( "</tr>");
}
   echo("</table>");
//$conn->close();
?>
