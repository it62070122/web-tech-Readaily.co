<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งการโอนเงิน</title>
    <link rel="icon" href="../images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">
</head>
<style>
    .block {
        /* กำหนดรูปแบบกล่อง */
        background-color: white;
        align-items: center;
    }
    
    input[type=text] {
        width: 120%;
    }
    
    label {
        color: grey;
        font-size: 16px;
        display: block;
    }
    
    input[type=text] {
        background: #f3f3f3;
        border: none;
        padding: 13px 10px;
        width: 400px;
        height: 50px;
        margin-bottom: 20px;
        clear: both;
    }
    
    input[type=text]:focus {
        background: white;
        border: solid 2px #f3f3f3;
        box-shadow: 0 0 13px #f3f3f3;
        outline: none;
    }
    
    #area {
        height: 90px
    }
    
    a.home:link {
        text-decoration: none;
    }
    
    a.home:visited {
        text-decoration: none;
    }
    
    a.home:hover {
        text-decoration: underline;
    }
    
</style>

<body>

    <?php 
    // Head 
    include "../asset/head.html";
    // NavBar
    include "../asset/navbar.html";
?>

    <div class="row no-gutters" style="padding: 4.5vh 5.3vw; background-color: #f3f3f3;">
        <div class="container" style="width: 750px; margin: auto;">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb p-0" style="background-color: #f3f3f3;">
                    <a class="home" href="../index" title="ไปยังหน้าหลัก" style="color: grey;">Home</a>
                    <span style="color: grey;">&nbsp; » &nbsp;</span>
                    <strong>แจ้งการโอนเงิน</strong>
                </div>

                <div class="form-group pl-5 pr-5" style="background-color: white;">
                    <div class="form-title">
                        <br>
                        <h1 class="text-center font-weight-bold title-pay">แจ้งการโอนเงิน</h1>
                        <br>
                    </div>

                    <div class="col align-self-center" style="padding: 3vh 7vw">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">หมายเลขใบสั่งซื้อ *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ชื่อ *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">อีเมล *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">โทรศัพท์</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="bank">โอนเข้าบัญชีของธนาคาร <em>*</em></label>
                                <select name="bank" id="bank" class="form-control" type="dropdown"> 
                                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                </select>
                            </div>

                            <!-- form วันที่ -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="date_day" class="form-inline">วันที่ <em>*</em></label>
                                        <select name="date_day" id="date_day" title="" class="required-entry" type="dropdown">
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                            <option value="14" >14</option>
                                            <option value="15" >15</option>
                                            <option value="16" >16</option>
                                            <option value="17" >17</option>
                                            <option value="18" >18</option>
                                            <option value="19" >19</option>
                                            <option value="20" >20</option>
                                            <option value="21" >21</option>
                                            <option value="22" >22</option>
                                            <option value="23" >23</option>
                                            <option value="24" >24</option>
                                            <option value="25" >25</option>
                                            <option value="26" >26</option>
                                            <option value="27" >27</option>
                                            <option value="28" >28</option>
                                            <option value="29" >29</option>
                                            <option value="30" >30</option>
                                            <option value="31" >31</option>
                                        </select>
                                        <select name="date_month" id="date_month" title="" class="required-entry" type="dropdown">
                                            <option value="มกราคม" >มกราคม</option>
                                            <option value="กุมภาพันธ์" >กุมภาพันธ์</option>
                                            <option value="มีนาคม" >มีนาคม</option>
                                            <option value="เมษายน" >เมษายน</option>
                                            <option value="พฤษภาคม" >พฤษภาคม</option>
                                            <option value="มิถุนายน" >มิถุนายน</option>
                                            <option value="กรกฎาคม" >กรกฎาคม</option>
                                            <option value="สิงหาคม" >สิงหาคม</option>
                                            <option value="กันยายน" >กันยายน</option>
                                            <option value="ตุลาคม" >ตุลาคม</option>
                                            <option value="พฤศจิกายน" >พฤศจิกายน</option>
                                            <option value="ธันวาคม" >ธันวาคม</option>
                                        </select>
                                        <select name="date_year" id="date_year" title="" class="required-entry input-box" type="dropdown">
                                            <option value="2020" >2020</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="time_hour" class="form-inline">เวลา <em>*</em></label>
                                        <select name="time_hour" id="time_hour" title="" class="required-entry input-box" type="dropdown">
                                            <option value="00" >00</option>
                                            <option value="01" >01</option>
                                            <option value="02" >02</option>
                                            <option value="03" >03</option>
                                            <option value="04" >04</option>
                                            <option value="05" >05</option>
                                            <option value="06" >06</option>
                                            <option value="07" >07</option>
                                            <option value="08" >08</option>
                                            <option value="09" >09</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                            <option value="14" >14</option>
                                            <option value="15" >15</option>
                                            <option value="16" >16</option>
                                            <option value="17" >17</option>
                                            <option value="18" >18</option>
                                            <option value="19" >19</option>
                                            <option value="20" >20</option>
                                            <option value="21" >21</option>
                                            <option value="22" >22</option>
                                            <option value="23" >23</option>
                                            <option value="24" >24</option>
                                        </select>:
                                        <select name="time_hour" id="time_hour" title="" class="required-entry input-box" type="dropdown">
                                            <option value="00" >00</option>
                                            <option value="01" >01</option>
                                            <option value="02" >02</option>
                                            <option value="03" >03</option>
                                            <option value="04" >04</option>
                                            <option value="05" >05</option>
                                            <option value="06" >06</option>
                                            <option value="07" >07</option>
                                            <option value="08" >08</option>
                                            <option value="09" >09</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                            <option value="14" >14</option>
                                            <option value="15" >15</option>
                                            <option value="16" >16</option>
                                            <option value="17" >17</option>
                                            <option value="18" >18</option>
                                            <option value="19" >19</option>
                                            <option value="20" >20</option>
                                            <option value="21" >21</option>
                                            <option value="22" >22</option>
                                            <option value="23" >23</option>
                                            <option value="24" >24</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end form วันที่ -->

                            <div class="form-group">
                                <label for="exampleInputPassword1">จำนวนเงิน</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ข้อความเพิ่มเติม</label>
                                <input type="text" class="form-control" id="area">
                                </input>
                            </div>
                            <div class="buttons-set">
                                <button type="submit" title="ส่งข้อความ" class="button" style="width:100%">
                                    <span><span>ส่งข้อความ</span></span>
                                </button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
                </div>
                
            </div>
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