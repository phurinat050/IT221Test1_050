<?php
    $link = mysqli_connect("localhost","root","1234");
    mysqli_set_charset($link,'utf8');
    mysqli_query($link,"Use room;");// ทดสอบแก้ไขข้อ 6
    $sql = "select * from counter;";
// ทดสอบแก้ไขข้อ 6
    $result = mysqli_query($link,$sql);
    while ($dbarr = mysqli_fetch_array($result)){// ทดสอบแก้ไขข้อ 6
        $pgcount = $dbarr["countnum"];// ทดสอบแก้ไขข้อ 6
    }
    $pgcount = $pgcount + 1;// ทดสอบแก้ไขข้อ 6
    $pgcount = "00000" . $pgcount;
    $pgcount = substr($pgcount, -6);// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6
    echo "$pgcount";// ทดสอบแก้ไขข้อ 6

    $sql = "Update counter set countnum = '$pgcount' where id = 1";// ทดสอบแก้ไขข้อ 6
    $result = mysqli_query($link,$sql);// ทดสอบแก้ไขข้อ 6
?>// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6// ทดสอบแก้ไขข้อ 6
// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11// ทดสอบแก้ไขข้อ 11
