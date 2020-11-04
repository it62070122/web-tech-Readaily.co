<?php
    $url = "../asset/json/pre-order.json";    
    $response = file_get_contents($url);
    $result = json_decode($response); 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($result[3]->thainame != null){
        echo $result[3]->thainame.": ".$result[3]->artist.": ".$result[3]->key;
    }
    else{
        echo $result[3]->name.": ".$result[3]->artist.": ".$result[3]->key;
    } ?>
    </title>
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
                    if($result[3]->name != null){
                            if($result[3]->thainame != null){
                                echo "<b>".$result[3]->thainame."</b><br>";     
                                echo "แปลจากหนังสือ: <b>".$result[3]->name."</b><br>";
                            }
                            else{
                                echo "<b>".$result[3]->name."</b><br>";
                            }    
                        }
                    else{
                        echo "<b>".$result[3]->thainame."</b><br>";
                    }
                    
                    echo"ผู้เขียน: ";
                    echo "<a href=\"\"><b>";
                    echo $result[3]->artist;
                    echo "</b></a><br>";
                    if($result[3]->translater != null){
                        echo "ผู้แปล: ";
                        echo "<a href=\"\"><b>";
                        echo $result[3]->translater;
                        echo "</b></a><br>";
                    }
                    if($result[3]->coverdesigner != null){
                        echo "ออกแบบปก: ";
                        echo "<a href=\"\"><b>";
                        echo $result[3]->coverdesigner;
                        echo "</b></a><br>";
                    }
                    if($result[3]->publicher != null){
                        echo "สำนักพิมพ์: ";
                        echo "<a href=\"\"><b>";
                        echo $result[3]->publicher;
                        echo "</b></a><br>";
                    }
                    echo "จำนวนหน้า: ".$result[3]->pages." หน้า ".$result[3]->bookcover."<br>";
                    echo "พิมพ์ครั้งที่ ".$result[3]->repub." — ".$result[3]->date."<br>";
                    echo "ISBN: ".$result[3]->key;
                    echo "</div>";
                ?>
            </div>

            <!-- เรื่องย่อ -->
            <div class="col-md-7 col-12 p-1 synopsis">
                    
                <?php
                  
                    for($i=0;$i<sizeof($result[3]->description);$i++){
                            echo $result[3]->description[$i]."<br><br>";
                }
                if($result[3]->credit != null){
                    echo "<b>-".$result[3]->credit."</b>";
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
