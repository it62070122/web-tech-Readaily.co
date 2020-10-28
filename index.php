<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicons/android-chrome-192x192.png" type="image/png" sizes="192x192">
</head>

<body>
    <?php 
    // Head 
    include "asset/head.html";
    // NavBar
    include "asset/navbar.html";

    /* Content */
        // So hot right now 
        include "asset/index/so-hot-right-now.php";
        // Pre order 
        include "asset/index/pre-order.php";
        // New Arrivals - Fiction 
        include "asset/index/new-arrivals-fiction.html";
        // วรรณกรรมญี่ปุ่น
        include "asset/index/japanese-literature.html";
        // วรรณกรรมแปล
        include "asset/index/fiction-novel.html";
        // New Arrivals - Thai Fiction
        include "asset/index/new-arrivals-thai-fiction.html";
        // Non-Fiction: Bestsellers
        include "asset/index/non-fiction-bestsellers.html";
        // New Arrivals - Non-Fiction
        include "asset/index/new-arrivals-non-fiction.html";
    /* End content */

    // Category box 
    include "asset/categorybox.html";
    // Top button
    include "asset/backtotop.html";
    // Footer
    include "asset/footer.html";?>
</body>
</html>