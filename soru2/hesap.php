<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            session_start();

            if(!isset($_SESSION["products"])){
                $_SESSION["products"] = array();
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $_SESSION["products"] = array();
                header("Location: index.php");
            }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Adet</th>
                    <th>Fiyat</th>
                </tr>
            </thead>
            <tbody>
                <?php    
                    foreach($_SESSION["products"] as $product){
                        echo "<tr>";
                        echo "<td>" . $product["name"] . "</td>";
                        echo "<td>" . $product["quantity"] . "</td>";
                        echo "<td>" . $product["price"] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <?php
            $total = 0;
            foreach($_SESSION["products"] as $product){
                $total += $product["quantity"] * $product["price"];
            }

            echo "Toplam: " . $total;
        ?>
        <a href="index.php">
            <input type="button" value="Geri dön">
        </a>

        <form action="hesap.php" method="post">
            <input type="submit" value="Tamamla">
        </form>
    </body>
</html>