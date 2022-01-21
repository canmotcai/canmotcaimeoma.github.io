<?php
 $link = new mysqli('localhost', 'root', '', 'demo') or die('Ket noi that bai!');
 mysqli_query($link, 'SET NAMES UTF8    ') ; 
 include 'top.php';
?>

<h1>Noi Dung</h1>
    <div id="noi dung me day">
<?php
    $query = "SELECT hoten FROM sinhvien";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) >0){
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
            echo "$i." .$row['hoten'] ."<br>";
        }
    } else {
        echo "khong co ban gi";
    }
    ?>
<?php
    include 'right.php';
    include 'bottom.php';
    ?>