<!DOCTYPE html>
<html lang="en">
    <head>
    </head>

    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"] != "GET") die();

            $servername = "127.0.0.1";
            $username = "root";
            $password = "abc"; 
            $dbname = "DENEME";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
            }

            $sql = $_GET["sorgu"];
        ?>
        <table>
            <thead>
                <tr> 
                    <?php
                        $result = $conn->query($sql);

                        $row1 = $result->fetch_assoc();
                        $columns = array_keys($row1);
                        foreach($columns as $key){
                            echo("<th>" . $key . "</th>");
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $conn->query($sql);
                    $row1 = $result->fetch_assoc();             
                    while($row = $result->fetch_assoc()) {
                        echo("<tr>");

                        foreach($columns as $key){
                            echo("<td>" . $row[$key] . "</td>");
                        }
                        
                        echo("</tr>");
                    }
                    $conn->close();                    
                ?>
            </tbody>
        </table>
    </body>
</html>