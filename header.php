<!DOCTYPE html>
<html lang="de" <?php (is_front_page()) ? print("class='frontpage'") : "" ; ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head()
    ?>
</head>
<body>
    <?php
    grw_partial("navbar");
    ?>
    <div id="main-content">