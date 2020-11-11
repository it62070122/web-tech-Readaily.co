
<?php
    $url = "asset/json/new-arrivals-non-fiction.json";    
    $response = file_get_contents($url);
    $result = json_decode($response);
?>

<div class="row no-gutters padding-content d-flex justify-content-center">
    <div class="container p-0">
        <h2 id="title">New Arrivals - Non-Fiction</h2>
    </div>
</div>
<hr style="border-top: 1px solid#f0f0f0; margin: 0;">