<?php
$so = rand(10, 100);
if (isset($_POST)) {
    $pattern = '/^[.!@#$%^&*_+]{1}$/';
    if (isset($_POST['kytugionghang'])) {
        $a = $_POST['kytugionghang'];
        if (!preg_match($pattern, $a)) {
            $error = "không đúng";
        }
    }
    if (isset($_POST['kytutaocay'])) {
        $b = $_POST['kytutaocay'];
        if (!preg_match($pattern, $b)) {
            $error2 = "không đúng";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cây thông</title>
    
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="sohang">Nhập số hàng</label><br>
            <input type="number" name="sohang" value="<?=$so?>"><br>
            <label for="kytugionghang">Nhập ký tự gióng hàng</label><br>
            <input type="text" name="kytugionghang">
            <p><?php if (isset($error)) : ?><?= $error ?><?php endif; ?></p><br>
            <label for="kytutaocay">Nhập ký tự tạo hình cây</label><br>
            <input type="text" name="kytutaocay">
            <p><?php if (isset($error2)) : ?><?= $error2 ?><?php endif; ?></p><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
    for ($i = 0; $i < $so; $i++) {
        for ($j = 1; $j <= $so-$i; $j++) {
            if(isset($a)){
                echo $a;
            }
        }
        for ($k = 1; $k <= $i * 2 +1; $k++) {
            if(isset($b)){
                echo $b;
            }
        }
        echo "</br>";
    }
    ?>
</body>

</html>