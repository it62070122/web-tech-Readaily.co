<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readery ร้านหนังสือออนไลน์ รี้ดเดอรี่</title>
    <link rel="icon" href="images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">
</head>

<body>
    <?php 
    // Head 
    include "asset/index/head.html";
    // NavBar
    include "asset/index/navbar.html";

    /* Content */
        // So hot right now 
        include "asset/index/so-hot-right-now.php";
        // Pre order 
        include "asset/index/pre-order.php";
        // New Arrivals - Fiction 
        include "asset/index/new-arrivals-fiction.php";
        // วรรณกรรมญี่ปุ่น
        include "asset/index/japanese-literature.php";
        // วรรณกรรมแปล
        include "asset/index/fiction-novel.php";
        // New Arrivals - Thai Fiction
        include "asset/index/new-arrivals-thai-fiction.php";
        // Non-Fiction: Bestsellers
        include "asset/index/non-fiction-bestsellers.php";
        // New Arrivals - Non-Fiction
        include "asset/index/new-arrivals-non-fiction.php";
    /* End content */

    // Category box 
    include "asset/categorybox.html";
    // Top button
    include "asset/backtotop.html";
    // Footer
    include "asset/index/footer.html";?>
</body>
</html>