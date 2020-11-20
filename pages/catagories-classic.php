<?php
    $url = "../asset/json/mock-classic.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic</title>
    <link rel="icon" href="../images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">
</head>
<?php 
    // Head 
    include "../asset/head.html";
    // NavBar
    include "../asset/navbar.html";
?>
<style>
    span.discount {
    background: #ff0000;
    color: #ffffff;
    font-size: 0.75em;
    line-height: 1;
    display: inline-block;
    border-radius: 2px;
    padding: 2px 3px;
}
</style>
<body>

    <div class="row no-gutters padding-content d-flex justify-content-center">
        <div class="container p-0">
            <h1 id="title" style="font-size: 2.75em">Classic</h1>
            <?php for ($j=0; $j<1; $j++){ 
            echo '<div class="row align-self-start mt-4">';
                for ($i=0; $i<count($result); $i++){
                    echo "<div class=\"col-6 col-md\" id=\"books\">";
                    echo "<div class=\"card m-1\" style=\"border: none; text-align: center; padding: 2vh;\">";
                    if ($i < 2){
                        echo "<a href='pages/".$result[$i]->key.".php'> <img class=\"card-img-top img-fluid ml-auto mr-auto mb-3\" src=\"../images/cover/mock-classic/".$result[$i]->img."\"></a>";
                    }else{
                        echo "<a href=''> <img class=\"card-img-top img-fluid ml-auto mr-auto mb-3\" src=\"../images/cover/mock-classic/".$result[$i]->img."\"></a>";
                    }
    

                    if($result[$i]->covertag[0] == "new release"){
                        echo "<div class=\"new-release\"></div>";
                    }
                    else if($result[$i]->covertag[0] == "Pre-Order"){
                        echo "<div class=\"pre-order\"></div>";
                    }
                    else{
                        continue;
                    }

                    echo "<a class=\"thainame mb-1 text-decoration-none\" ";
                    if ($i < 2){
                        echo "href='pages/".$result[$i]->key.".php' id=\"book-title\">";
                    }else{
                        echo "href='' id=\"book-title\">";
                    }
                    echo "<span class='discount'>".$result[$i]->discount."%</span>";
                    echo "&nbsp;".$result[$i]->thainame;
                    echo "</a>";
                    echo "<a class=\"artist mb-1 text-decoration-none\" href='' id=\"book-author\">";
                    echo $result[$i]->artist;
                    echo "</a>";
                    echo "<p>";
                    echo "<span class=\"price-grey\">";
                    echo "฿".number_format($result[$i]->cost, 2, '.', '');
                    echo "</span>";
                    echo "<span class=\"price-red\">";
                    echo " ฿".number_format(($result[$i]->cost*(100 - $result[$i]->discount))/100, 2, '.', '');
                    echo "</span></p></div></div>";
                }

            echo '</div>';
            } ?>

        </div>

    </div>

    <hr style="border-top: 1px solid#f0f0f0; margin: 0;">
    <?php 
    // Top button
    include "../asset/backtotop.html";
    // Footer
    include "../asset/footer.html";
?>
    </body>
</html>