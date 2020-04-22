<?php 
    require_once('connect.php'); // เรียกไฟล์เชื่อมต่อ Database เข้ามาใช้งานเพียงครั้งเดียว

    // ประกาศตัวแปร เพื่อเก็บค่า
    $id = $_GET['id'];
    $category = "มะม่วง";
    $type = "โชคอนันต์";
    $amount = 30;

    /** 
     * isset หมายความว่า ตัวแปรนั้นๆ มีการกำหนดขึ้นมาหรือไม่
     * ใช้สำหรับ check เงื่อนไขของตัวแปร
     */
    if (isset($id)){
        /**
         * ประกาศตัวแปร $sql เพื่อเก็บคำสั่ง sql
         * แก้ไขตารางที่มีชื่อว่า fruits โดยแก้ไขข้อมูล category, type, amount
         * โดยมีเงื่อนไขที่ว่า id ต้องเท่ากับ $id
         */
        $sql = "UPDATE `fruits` SET
                `category` = '".$category."', 
                `type` = '".$type."', 
                `amount` = '".$amount."' 
                WHERE `id` = '".$id."' ";
        // ประมวณผล query ($conn->query($sql))
        $result = $conn->query($sql);

        ////เช็คว่าสามารถแก้ไขข้อมูลได้จริงหรอเปล่า // TRUE = สามารถเก็บแก้ไขได้ // FALSE = มีบางอย่างผิดพลาดทำงานไม่ได้
        if($result){
            echo "สำเร็จ";
        } else {
            echo "ผิดพลาด";
        }
    } else {
        echo "ไม่มีข้อมูล update";
    }

?>