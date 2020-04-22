<?php 
    require_once('connect.php'); // เรียกไฟล์เชื่อมต่อ Database เข้ามาใช้งานเพียงครั้งเดียว
    // ประกาศตัวแปร เพื่อเก็บค่า ///
    $category = "มะม่วง";
    $type = "น้ำดอกไม้";
    $amount = 25;
    //ประกาศตัวแปร $sql เพื่อเก็บค่า sql
    //ใช้ INSERT INTO ในการใส่ค่าเข้าไปในดาต้าเบส
    $sql = "INSERT INTO `fruits` (`category`, `type`, `amount`) 
            VALUES ( '".$category."' , '".$type."' , '".$amount."')";
    // ประมวณผล query
    $result = $conn->query($sql);
    //เช็คว่า สามารถเอาข้อมูลเข้าดาต้าเบสได้จริงหรอเปล่า // TRUE = สามารถเก็บข้อมูลได้ // FALSE = มีบางอย่างผิดพลาดทำงานไม่ได้
    if ($result){
        echo "สำเร็จแล้ว";
    } else {
        echo "ไม่สำเร็จ";
    }

?>
