<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua bai tuan 3</title>
</head>
<body>
    <h1>Search Form</h1>
    <form action="" method="get">
        <input type="text" name="keyword" id="" 
        value="<?php echo isset($_GET['keyword'])?$_GET['keyword']:"" ?>">
        <input type="submit" value="Search">
    </form>
    <?php
    if(isset($_GET['keyword'])){
        echo "Tu khoa tim kiem la ".$_GET['keyword'];
    }
    ?>
    <h1>Menu</h1>
    <form action="" method="get">
        Mon khai vi:
        <select name="kv[]" id="" multiple>
            <option value="1">Goi ngo sen</option>
            <option value="2">Cha gio</option>
            <option value="3">Com chien</option>
            <option value="4">Soup cua</option>
        </select>
        Mon chinh:
        <select name="mc[]" id="" multiple>
            <option value="1">Goi ngo sen</option>
            <option value="2">Cha gio</option>
            <option value="3">Com chien</option>
            <option value="4">Soup cua</option>
        </select>
        Mon trang mieng:
        <select name="tm[]" id="" multiple>
            <option value="1">Goi ngo sen</option>
            <option value="2">Cha gio</option>
            <option value="3">Com chien</option>
            <option value="4">Soup cua</option>
        </select>
        <input type="submit" value="Gui">
    </form>
    <?php
    if(isset($_GET['kv'])){
        $kv = $_GET['kv'];
        $mc = $_GET['mc'];
        $tm = $_GET['tm'];
        echo "Mon khai vi:";
        foreach($kv as $value){
            echo "<li> Mon ".$value.'</li>';
        }
        echo "Mon chinh:";
        foreach($mc as $value){
            echo "<li> Mon ".$value.'</li>';
        }
        echo "Mon trang mieng:";
        foreach($tm as $value){
            echo "<li> Mon ".$value.'</li>';
        }
    }
    ?>
</body>
</html>