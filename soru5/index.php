<!DOCTYPE html>
<html lang="en">
    <head>
    </head>

    <body>
        <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "abc"; 
            $dbname = "DENEME";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM LINKLER";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo("<image src=\"". $row["hrefText"] ."\" >");
                echo("<p>". $row["contextText"] ."</p>");
            }

            $conn->close();
        ?>
    </body>
</html>