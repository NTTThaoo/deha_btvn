<?php
// PHẦN TRẮC NGHIỆM
// Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// Câu 2: Đáp án A
// Câu 3: Đáp án A
// Câu 4: Đáp án A
// Câu 5: Đáp án B
// PHẦN TỰ LUẬN
// Câu 1:
<?php
function generateFibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 0;
 
    if ($n <= 0) {
        return;
    } else if ($n == 1) {
 echo ("0");
        return;
    } else if ($n == 2) {
 echo ("0 1");
        return;
    } else {
 echo ("0 1 ");
        for($i = 3; $i <= $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
 echo (fn . " ");
        }
    }
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
generateFibonacci(10);
?>
// Câu 2:
<?php

$students = = array( 
    0 => array
    (
        "id" => 1,
        "name" => "Nguyễn Thanh Thảo",  
        "age" => 20,
 "grade" => 8 
    ),

    1 => array
    (
        "id" => 2,
        "name" => "Nguyễn Thị Thu Trang",  
        "age" => 20,
 "grade" => 8.7
    ),

    2 => array
    (
        "id" => 3,
        "name" => "Nguyễn Thanh Thanh",  
        "age" => 20,
 "grade" => 7.8
    )
);

function maxGrade() {
    global $student;
 $studentId = "";
     $studentName = "";
 $max = 0;
 foreach ($students as $item){
  if ($item['grade'] > $max) {
          $max = $item['grade'];
   $studentName = $item['name']
   $studentId = $item['id']
      } 
 }
 echo ("Học sinh có điểm số cao nhất là: ". $studentName . ", có id là " . $studentId);
}

?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Danh sách sinh vien</h1>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Birthday</td>
            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['age']; ?></td>
                <td><?php echo $item['grade']; ?></td>
            </tr>
            <?php } ?>
        </table>
 <h1><?php maxGrade() ?></h1>
    </body>
</html>