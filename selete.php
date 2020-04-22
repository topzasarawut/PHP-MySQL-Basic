<?php 
    require_once('connect.php'); // เรียกไฟล์เชื่อมต่อ Database เข้ามาใช้งานเพียงครั้งเดียว
    /**
     * ประกาศตัวแปร $sql เพื่อเก็บคำสั่ง sql ที่จะดึงข้อมูลออกจาก Database
     * เลือกทั้งหมดจากตาราง fruits โดยมีเงือนไขที่ว่า category ต้องมีค่าเท่ากับ 'ทุเรียน'
     */
    $sql = "SELECT * FROM `fruits` WHERE category = 'ทุเรียน' ";
    /**
     * ประมวณผล query ($conn->query($sql))
     * แสดง error เมื่อมีข้อผิดพลาด die($conn->error)
     */
    $result = $conn->query($sql) or die($conn->error);
    /**
     * ตรวจสอบข้อมูลที่ทำการดึงค่าออกมาว่ามีจำนวนกี่ record
     */
    if ($result->num_rows > 0){
        // Loop while เพื่อดึงข้อมูลแต่ละ record ออกมาแสดง
        while($row = $result->fetch_assoc()){
            // แสดงค่าข้อมูล
            echo $row['category'];
            echo $row['type'].': ';
            echo $row['amount'].'<br>';
        }
        // $result->num_rows แสดงข้อมูลของ record ทั้งหมดที่ดึงมาได้
        echo '<br>มีผลไม้ทั้งหมด '.$result->num_rows.' ชนิด';
    } else {
        echo "ไม่มีข้อมูล";
    }
    
    /**
     * คำสั่งที่ 1 MySQLi_Result::fetch_assoc() ข้อมูลที่ได้จะเป็น associative array
     */
        // $row = $result->fetch_assoc();
        // echo '<pre>',print_r($row),'</pre>';
        // // การเข้าถึงข้อมูล
        // echo $row['category'];

    /**
     * คำสั่งที่ 2 MySQLi_Result::fetch_row() ข้อมูลที่ได้จะเป็น indexed array
     */
        // $row = $result->fetch_row();
        // echo '<pre>',print_r($row),'</pre>';
        // // การเข้าถึงข้อมูล
        // echo $row[1];

    /**
     * คำสั่งที่ 3 MySQLi_Result::fetch_array() ข้อมูลที่ได้จะเป็นทั้ง indexed array และ associative array
     */
        // $row = $result->fetch_array();
        // echo '<pre>',print_r($row),'</pre>';
        // // การเข้าถึงข้อมูล
        // echo $row[1];
        // echo '<br>';
        // echo $row['category'];

    /**
     * คำสั่งที่ 4 MySQLi_Result::fetch_object() ข้อมูลที่ได้จะเป็น object
     */
        // $row = $result->fetch_object();
        // echo '<pre>',print_r($row),'</pre>';
        // // การเข้าถึงข้อมูล
        // echo $row->category;

?>