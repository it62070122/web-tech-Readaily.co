<?php
    $url = "../asset/json/so-hot-right-now.json";    
    $response = file_get_contents($url);
    $result = json_decode($response); 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result[4]->thainame.": ".$result[4]->artist.": ".$result[4]->key ?></title>
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
                    if($result[4]->thainame != null){
                        echo "<b>".$result[4]->thainame."</b><br>";
                    }
                    if($result[4]->name != null){
                        echo "แปลจากหนังสือ: <b>".$result[4]->name."</b><br>";
                    }
                    echo"ผู้เขียน: ";
                    echo "<a href=\"\"><b>";
                    echo $result[4]->artist;
                    echo "</b></a><br>";
                    if($result[4]->translater != null){
                        echo "ผู้แปล: ";
                        echo "<a href=\"\"><b>";
                        echo $result[4]->translater;
                        echo "</b></a><br>";
                    }
                    if($result[4]->coverdesigner != null){
                        echo "ออกแบบปก: ";
                        echo "<a href=\"\"><b>";
                        echo $result[4]->coverdesigner;
                        echo "</b></a><br>";
                    }
                    if($result[4]->publicher != null){
                        echo "สำนักพิมพ์: ";
                        echo "<a href=\"\"><b>";
                        echo $result[4]->publicher;
                        echo "</b></a><br>";
                    }
                    echo "จำนวนหน้า: ".$result[4]->pages." หน้า ".$result[4]->bookcover."<br>";
                    echo "พิมพ์ครั้งที่ ".$result[4]->repub." — ".$result[4]->date."<br>";
                    echo "ISBN: ".$result[4]->key;
                    echo "</div>";
                ?>
            </div>

            <!-- เรื่องย่อ -->
            <div class="col-md-7 col-12 p-1 synopsis">
                <?php
                    $check = 0;
                    $check2 = 0;
                    for($i=0;$i<sizeof($result[4]->description);$i++){
                        $check = strpos($result[4]->description[$i],"nah");
                        // $check2 = strpos($result[4]->description[$i],"new1");//สำหรับเว้น1บรรทัดหลัง
                        $check3 = strpos($result[4]->description[$i],"new2");//สำหรับเว้น2บรรทัดหลังตัวหนา
                        $check4 = strpos($result[4]->description[$i],"none");//สำหรับไม่เว้นเลย
                        if($check !== FALSE){
                            // if($check2 !== FALSE){ 
                            //     $word = str_replace("nah","",$result[4]->description[$i]);
                            //     echo "<b>".str_replace("new1","",$word)."</b><br>";//กรณีถ้าตัวหนาแล้วเว้น1บรรทัด
                            // }
                            // else
                            if($check3 !== FALSE){ 
                                $word = str_replace("nah","",$result[4]->description[$i]);
                                echo "<b>".str_replace("new2","",$word)."</b><br><br>";//กรณีถ้าตัวหนาแล้วเว้น2บรรทัด
                            }
                            else{
                                echo "<b>".str_replace("nah","",$result[4]->description[$i])."</b>";//กรณีถ้าตัวหนาไม่เว้นบรรทัด
                            }    
                        }
                        else{
                            // if($check2 !== FALSE){ 
                            //     echo str_replace("new1","",$result[4]->description[$i]."<br>");//กรณีเว้นบรรทัด1
                            // }

                            // else 
                            if($check4 !== FALSE){ 
                                echo str_replace("none","",$result[4]->description[$i]);//กรณีไม่เว้นบรรทัด
                            }
                            else{
                                echo $result[4]->description[$i]."<br><br>";//กรณีเว้น2บรรทัด
                            }    
                        }    
                    }
                    if($result[4]->credit != null){
                        echo "-".$result[4]->credit;
                    }
                    
                ?>
            </div>
        </div>

<?php 
    // Top button
    include "../asset/backtotop.html";
    // Footer
    include "../asset/footer.html";
?>
</body>
</html>