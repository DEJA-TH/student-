<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>สำนักวิชาการและประมวลผล | RERU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(116, 4, 91);
    }

    li {
        float: right;
    }

    li a, .drop {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover, .dropdown:hover .drop {
        background-color: rgb(226, 37, 226);
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>
<body>
    <ul>
    <li><a href=<?php echo" 'showxml.php'>ดูข้อมูลผู้สมัคร</a><br>"; ?></li>
    <li><a href=<?php echo" 'createxml.php'>สร้างไฟล์xml</a><br>"; ?></li>
    <!-- <li></li> -->
    <li class="dropdown">
    <a href="javascript:void(0)" class="drop">ดูรายชื่อคณะ</a>
    <div class="dropdown-content">
    <a href=<?php echo" 'payaban.php'>พยาบาลศาสตร์</a><br>"; ?>
    <a href=<?php echo" 'showxml.php'>ดูข้อมูลผู้สมัคร</a><br>"; ?>
    <a href=<?php echo"'search_home.php'>ค้นหาข้อมูลผู้สมัคร</a><br>"; ?>
    </div>
    </li>
    </ul>
</body>
</html>