<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php
        for($i=1;$i<4;$i++) {
            echo('<image src="resim' . $i . '.jpg" id="' . $i .'" onclick="boyutdegis('. $i .')" />');
            echo("<br/>");
        }
        ?>
        <script>
            function boyutdegis(resimId) {
                var resim = document.getElementById(resimId)
                if(resim.src.endsWith("k.jpg")) {
                    resim.src = "resim" + resimId + ".jpg"
                } else {
                    resim.src = "resim" + resimId + "k.jpg"
                }
            }
        </script>
    </body>
</html>