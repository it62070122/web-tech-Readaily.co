<?php
    $url = "../asset/json/pre-order.json";    
    $response = file_get_contents($url);
    $result = json_decode($response); 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result[1]->thainame.": ".$result[1]->artist.": ".$result[1]->key ?></title>
    <link rel="icon" href="../images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">
    
</head>

<body>

<?php 
    // Head 
    include "../asset/head.html";
    // NavBar
    include "../asset/navbar.html";
?>

    <!-- Content  -->
        <div class="row no-gutters" style="padding: 7vh 7.2vw 7vh 7.2vw;">
            <!-- ข้อมูลหนังสือ -->
            <div class="col-md-5 col-12 p-1">
                <?php    
                    echo "<p class=\"thainame\">ข้อมูลหนังสือ</p>";
                    echo "<div class=\"detail\">";
                    if($result[1]->thainame != null){
                        echo "<b>".$result[1]->thainame."</b><br>";
                    }
                    if($result[1]->name != null){
                        echo "แปลจากหนังสือ: <b>".$result[1]->name."</b><br>";
                    }
                    echo"ผู้เขียน: ";
                    echo "<a href=\"\"><b>";
                    echo $result[1]->artist;
                    echo "</b></a><br>";
                    if($result[1]->translater != null){
                        echo "ผู้แปล: ";
                        echo "<a href=\"\"><b>";
                        echo $result[1]->translater;
                        echo "</b></a><br>";
                    }
                    if($result[1]->coverdesigner != null){
                        echo "ออกแบบปก: ";
                        echo "<a href=\"\"><b>";
                        echo $result[1]->coverdesigner;
                        echo "</b></a><br>";
                    }
                    if($result[1]->publicher != null){
                        echo "สำนักพิมพ์: ";
                        echo "<a href=\"\"><b>";
                        echo $result[1]->publicher;
                        echo "</b></a><br>";
                    }
                    echo "จำนวนหน้า: ".$result[1]->pages." หน้า ".$result[1]->bookcover."<br>";
                    echo "พิมพ์ครั้งที่ ".$result[1]->repub." — ".$result[1]->date."<br>";
                    echo "ISBN: ".$result[1]->key;
                    echo "</div>";
                ?>
            </div>

            <!-- เรื่องย่อ -->
            <div class="col-md-7 col-12 p-1 synopsis">
                    
                <?php
                  
                    for($i=0;$i<sizeof($result[1]->description);$i++){
                            echo $result[1]->description[$i]."<br><br>";
                }
                if($result[1]->credit != null){
                    echo "<b>-".$result[1]->credit."</b>";
                }
                ?>
            </div>
        </div>

<?php 
    // Sugggestion
    include "../asset/suggestion.php";
    // Top button
    include "../asset/backtotop.html";
    // Footer
    include "../asset/footer.html";
?>

</body>
</html>
