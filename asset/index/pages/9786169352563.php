<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        a{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php
                    $url = "asset/json/so-hot-right-now.json";    
                    $response = file_get_contents($url);
                    $result = json_decode($response);     
                    echo "ข้อมูลหนังสือ<br><br>";
                    if($result[0]->thainame != null){
                        echo $result[0]->thainame."<br>";
                    }
                    if($result[0]->name != null){
                        echo "แปลจากหนังสือ: ".$result[0]->name."<br>";
                    }
                    echo"ผู้เขียน: ";
                    echo "<a href=\"\">";
                    echo $result[0]->artist;
                    echo "</a><br>";
                    if($result[0]->translater != null){
                        echo "ผู้แปล: ";
                        echo "<a href=\"\">";
                        echo $result[0]->translater;
                        echo "</a><br>";
                    }
                    if($result[0]->coverdesigner != null){
                        echo "ออกแบบปก: ";
                        echo "<a href=\"\">";
                        echo $result[0]->coverdesigner;
                        echo "</a><br>";
                    }
                    if($result[0]->publicher != null){
                        echo "สำนักพิมพ์: ";
                        echo "<a href=\"\">";
                        echo $result[0]->publicher;
                        echo "</a><br>";
                    }
                    echo "จำนวนหน้า: ".$result[0]->pages." หน้า ".$result[0]->bookcover."<br>";
                    echo "พิมพ์ครั้งที่ ".$result[0]->repub."— ".$result[0]->date."<br>";
                    echo "ISBN: ".$result[0]->key;
                ?>
            </div>
            <div class="col-md-7">
                <?php
                    $check = 0;
                    $check2 = 0;
                    for($i=0;$i<sizeof($result[0]->description);$i++){
                        $check = strpos($result[0]->description[$i],"nah");
                        $check2 = strpos($result[0]->description[$i],"new");
                        $check3 = strpos($result[0]->description[$i],"none");
                        if($check !== FALSE){
                            if($check2 !== FALSE){ 
                                $word = str_replace("nah","",$result[0]->description[$i]);
                                echo "<b>".str_replace("new","",$word)."</b><br><br>";
                            }
                            else{
                                echo "<b>".str_replace("nah","",$result[0]->description[$i])."</b>";
                            }    
                        }
                        else{
                            if($check3 !== FALSE){ 
                                echo str_replace("none","",$result[0]->description[$i]);
                            }
                            else{
                                echo $result[0]->description[$i]."<br><br>";
                            }    
                        }    
                    }
                    if($result[0]->credit != null){
                        echo "-".$result[0]->credit;
                    }
                    
                ?>
            </div>
        </div>
    </div>
</body>
</html>