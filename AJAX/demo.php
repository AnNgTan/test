<?php
if (strlen($_POST['search']) >= 3) {
    $file_path = './countries.csv';
    $file = fopen($file_path, "r");
    fgetcsv($file, 1024, ',');
    while ($row = fgetcsv($file, 1024, ',')) {
        $data[] =  $row[0] . ',' . $row[1];
    }
    $replace = '<span style="color: red;">' . $_POST['search'] . '</span>';
    for ($i = 0; $i < count($data); $i++) {
        if (strpos($data[$i], $_POST['search']) !== FALSE) {
            $new_string = str_replace($_POST['search'], $replace, $data[$i]);
            echo $new_string . "</br>";
        }
    }
}
