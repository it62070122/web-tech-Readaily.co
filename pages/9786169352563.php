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
        <div style="background: #FAFAFA">
        <div class="row padding-content d-flex justify-content-center">
                <div class="container p-0">
                    <div class="row">
                        <!-- รูปภาพ -->
                        <div class="col-md-5">
                            <img src="../images/cover/so-hot-right-now/<?php echo $result[0]->img; ?>">
                        </div>
                        <!-- book detail -->
                        <div class="col-md-7" style="float:left;">
                            <?php echo'<div class="row">';
                            if($result[0]->thainame != null){
                                echo "<h1><b>".$result[0]->thainame."</b></h1>";
                            }
                            echo'</div>';
                            echo'<div class="row">';
                            if($result[0]->name != null){
                            echo '<h4><b>'.$result[0]->name."</b></h4>";
                            }
                            echo'</div>';
                            echo'<div class="row"><h4 style="color:#E54343";><b>'.$result[0]->artist.'</b></h4></div>';

                            if ($result[0]->tag == null){
                                ;
                            }
                            else{
                            echo '<div class="row">
                            <h4><b>ซีรี่ส์: <span style="color:#E54343">'.$result[0]->tag[0].'</span></b></h4>
                            </div>';
                            }

                            echo'<div class="row" style="padding-top:5vh">
                                <div class="box p-4">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <h4 style="color:#E54343"><b>'.(($result[0]->cost)-(($result[0]->cost)*(($result[0]->discount)/100))).'</b><span class="text-muted" style="font-size:16px;"> บาท</span></h4>';
                            echo    '<p class="card-text text-muted">ราคาปก <span><s>'.($result[0]->cost).' บาท</s></span></p>';
                            echo     '<p class="card-text text-muted">ลด '.($result[0]->cost)*(($result[0]->discount)/100)." บาท (".($result[0]->discount).'%)</p>';
                            echo    '<li>มีสินค้าพร้อมส่ง</li>';
                            echo        '</div>
                                    <div class="col-md-6">
                                    <select name="number">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    </select>    
                                    <button  title="เพิ่มในรถเข็น" class="button btn-cart red"><i class="icon-cart"></i> <span>เพิ่มในรถเข็น</span></button>
                                    </div>
                                    </div>
                                    </div>
                                </div><br><br>'; 
                                
                                //  review
                            if ($result[0]->review == null){
                                ;
                            }
                            else{
                                echo '<div class="row">';
                                for ( $i=0; $i<sizeof($result[0]->review); $i++){
                                    echo '<p style="font-size:20px">'.$result[0]->review[$i].'</p>';
                                }
                                echo '</div>';
                            }
                            
                            //reviewer
                            if ($result[0]->reviewer == null){
                                ;
                            }
                            else{
                                echo '<div class="row">
                                <p style="font-size:20px"><b>- '.$result[0]->reviewer.'</b></p></div>';
                            }  
                            ?>
                        
                        </div>
                    </div>
                </div>
        </div>
        </div>
            
            <!-- ข้อมูลหนังสือ -->
        <div class="row padding-content d-flex justify-content-center">
            <div class="container">
                <div class="row p-0">
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
