<?php
    $url = "../asset/json/so-hot-right-now.json";    
    $response = file_get_contents($url);
    $result = json_decode($response); 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($result[0]->thainame != null){
        echo $result[0]->thainame.": ".$result[0]->artist.": ".$result[0]->key;
    }
    else{
        echo $result[0]->name.": ".$result[0]->artist.": ".$result[0]->key;
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
                    if($result[0]->name != null){
                            if($result[0]->thainame != null){
                                echo "<b>".$result[0]->thainame."</b><br>";     
                                echo "แปลจากหนังสือ: <b>".$result[0]->name."</b><br>";
                            }
                            else{
                                echo "<b>".$result[0]->name."</b><br>";
                            }    
                        }
                    else{
                        echo "<b>".$result[0]->thainame."</b><br>";
                    }
                    
                    echo"ผู้เขียน: ";
                    echo "<a href=\"\"><b>";
                    echo $result[0]->artist;
                    echo "</b></a><br>";
                    if($result[0]->translater != null){
                        echo "ผู้แปล: ";
                        echo "<a href=\"\"><b>";
                        echo $result[0]->translater;
                        echo "</b></a><br>";
                    }
                    if($result[0]->coverdesigner != null){
                        echo "ออกแบบปก: ";
                        echo "<a href=\"\"><b>";
                        echo $result[0]->coverdesigner;
                        echo "</b></a><br>";
                    }
                    if($result[0]->publicher != null){
                        echo "สำนักพิมพ์: ";
                        echo "<a href=\"\"><b>";
                        echo $result[0]->publicher;
                        echo "</b></a><br>";
                    }
                    echo "จำนวนหน้า: ".$result[0]->pages." หน้า ".$result[0]->bookcover."<br>";
                    echo "พิมพ์ครั้งที่ ".$result[0]->repub." — ".$result[0]->date."<br>";
                    echo "ISBN: ".$result[0]->key;
                    echo "</div>";
                ?>
            </div>

            <!-- เรื่องย่อ -->
            <div class="col-md-7 col-12 p-1 synopsis">
                    
                <?php
                  
                    for($i=0;$i<sizeof($result[0]->description);$i++){
                            echo $result[0]->description[$i]."<br><br>";
                }
                if($result[0]->credit != null){
                    echo "<b>-".$result[0]->credit."</b>";
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
