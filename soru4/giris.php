<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="giris.php" method="post">
            <input type="text" name="kullaniciadi">
            <input type="text" name="sifre">
            <input type="submit" value="giris yap">
        </form>

        <?php
            if(!isset($_COOKIE["deneme_sayisi"])) {
                setcookie("deneme_sayisi", "0");
            }

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $kullaniciadi = $_POST["kullaniciadi"];
                $sifre = $_POST["sifre"];

                if($kullaniciadi == "admin" && $sifre == "123") {
                    echo("Giris Basarili");
                } else {
                    $giris_sayisi = intval($_COOKIE["deneme_sayisi"]);
                    if($giris_sayisi >= 3) {
                        echo("Giris reddedildi");
                    } else {
                        $giris_sayisi++;
                        setcookie("deneme_sayisi", strval($giris_sayisi));
                        echo("Yanlis kullanici adi veya sifre (deneme sayisi : " . $giris_sayisi . ")");
                    }
                }
            }
        ?>
    </body>
</html>