<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Ürün adı giriniz">
            <input type="number" name="quantity" placeholder="Adet giriniz">
            <input type="number" name="price" placeholder="Fiyat giriniz">
            <input type="submit" value="Ekle">
        </form>
        <a href="hesap.php">
            <input type="button" value="Hesap">
        </a>
        <?php
            session_start();

            if(!isset($_SESSION["products"])){
                $_SESSION["products"] = array();
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["name"];
                $quantity = $_POST["quantity"];
                $price = $_POST["price"];
                $_SESSION["products"][] = array("name" => $name, "quantity" => $quantity, "price" => $price);
            }
        ?>
    </body>
</html>