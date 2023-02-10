<?php
//CÂU 4:
if (isset($_POST['submit'])) {
    $permitted_extension = ['jpg', 'png', 'gif'];
    $file_name = $_FILES['product_img']['name'];
    $file_tmp_name = $_FILES['product_img']['tmp_name'];

    $dir = 'upload/';
    $file_dir = $dir . basename($file_name);
    $file_extension = explode('.', $file_name);
    $file_extension = strtolower(end($file_extension));
    $error_message = '';
    if (in_array($file_extension, $permitted_extension)) {
        move_uploaded_file($file_tmp_name, $file_dir);
        $error_message = '<p style="color:green">
        Success! </p>';
    } else {
        $error_message = '<p style="color:red">
                        Fail! </p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row {
            float: left;
            width: 100%;
        }

        .mb-10 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="row mb-10">
            Hình ảnh <br />
            <input type="file" name="product_img" />
        </div>
        <div class="row mb-10">
            <input type="submit" name="submit" value="THÊM MỚI" />
        </div>
    </form>
    <?php
    echo $error_message ?? '';
    ?>
</body>

</html>