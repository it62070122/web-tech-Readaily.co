<?php
    $url = "../asset/json/so-hot-right-now.json";    
    $response = file_get_contents($url);
    $result = json_decode($response); 
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php if($result[0]->thainame != null){
        echo $result[0]->thainame.": ".$result[0]->artist.": ".$result[0]->key;
    }
    else{
        echo $result[0]->name.": ".$result[0]->artist.": ".$result[0]->key;
    } ?>
        </title>
        <link rel="icon" href="../images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">

    </head>
    <style>
        .box {
            width: 90%;
            background-color: #FDFDFD;
            border-radius: 4px;
            border: 1px solid #D5D8DC;
        }
        
        select {
            -webkit-appearance: none;
            width: 40px;
            padding: 5px;
            border: 1px solid #D5D8DC;
        }
        #img2{
            display: none;
        }

        @media screen and (max-width: 750px) {
        #name {
            order: 1;
            flex-direction: column;
        }
        #img2 {
            display: inline;
            order: 2;
            flex-direction: column;
        }
        #img1{
            display: none;
        }
        #box {
            order: 3;
            flex-direction: column;
        }
        .name:nth-of-type(0) {
            order: 5
        }
        .name:nth-of-type(1) {
            order: 4
        }
    }

    #detail{
        font-size: 1.125em;
    }

    #row{
        background: #FAFAFA;
    }
    </style>

    <body>

        <?php 
    // Head 
    include "../asset/head.html";
    // NavBar
    include "../asset/navbar.html";
?>

        <!-- Content  -->
        <div id="row">
            <div class="row no-gutters padding-content d-flex justify-content-center">
                <div class="container p-0">
                    <div class="row align-self-start mt-4">
                        <!-- รูปภาพ -->
                        <div class="col-md-5 col-12" id="img1">
                            <img src="../images/cover/so-hot-right-now/<?php echo $result[0]->img; ?>">
                        </div>
                        <!-- book detail -->
                        <div class="col-md-7 col-12" style="float:left;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row" id="name">
                                        <?php 
                                            if($result[0]->thainame != null){
                                                echo "<h1 class='title-book'>".$result[0]->thainame."</h1>";
                                            }
                                        
                                            if($result[0]->name != null){
                                            echo '<h4><b>'.$result[0]->name."</b></h4>";
                                            }
                                            echo'<h4 class="subtitle-book"><a href="">'.$result[0]->artist.'</a></h4>';

                                            if ($result[0]->tag == null){
                                                ;
                                            }
                                            else{
                                            echo '
                                            <h4><b>ซีรี่ส์: <span style="color:#E54343">'.$result[0]->tag[0].'</span></b></h4>';
                                            } ?>
                                    </div>

                                    <div class="row" id="img2">
                                        <img class="pt-5 pb-2" src="../images/cover/so-hot-right-now/<?php echo $result[0]->img; ?>">
                                    </div>

                                    <div class="row" id="box">
                                        <?php echo'
                                            <div class="box p-4" style="margin-top:5vh">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <span class="price">'.(($result[0]->cost)-(($result[0]->cost)*(($result[0]->discount)/100))).'</span><span class="baht"> บาท</span>';
                                        echo    '<p class="card-text text-muted mb-0">ราคาปก <span><s>'.($result[0]->cost).' บาท</s></span></p>';
                                        echo     '<p class="card-text text-muted mb-3">ลด '.($result[0]->cost)*(($result[0]->discount)/100)." บาท (".($result[0]->discount).'%)</p>';
                                        echo    '<li>มีสินค้าพร้อมส่ง</li></div>';
                                        echo     '<div class="col-md-6">
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
                                                </div></div>
                                            </div><br><br>'; 
                                            
                                            //  review
                                        if ($result[0]->review == null){
                                            ;
                                        }
                                        else{
                                            for ( $i=0; $i<sizeof($result[0]->review); $i++){
                                                echo '<p style="font-size:20px">'.$result[0]->review[$i].'</p>';
                                            }
                                        }
                                        
                                        //reviewer
                                        if ($result[0]->reviewer == null){
                                            ;
                                        }
                                        else{
                                            '<p style="font-size:20px"><b>- '.$result[0]->reviewer.'</b></p></div>';
                                        }  
                                        ?>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <hr style="border-top: 1px solid#f0f0f0; margin: 0;">           

        <!-- ข้อมูลหนังสือ -->
        <div class="row no-gutters padding-content d-flex justify-content-center" style='padding-bottom: 12vh; background:white;'>
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-5 col-12 name">
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
                            echo "</div><br>";
                        ?>
                    </div>
                    <!-- เรื่องย่อ -->
                    <div class="col-md-7 col-12 name">
                        <div id="detail">
                            <?php

                            for($i=0;$i<sizeof($result[0]->description);$i++){
                                    echo $result[0]->description[$i]."<br><br>";
                            }
                            if($result[0]->credit != null){
                            echo "<b>-".$result[0]->credit."</b>";
                            }
                            echo "<br><br>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr style="border-top: 1px solid#f0f0f0; margin: 0;">
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