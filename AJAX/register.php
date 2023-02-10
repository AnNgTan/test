<?php
if (isset($_POST)) {
    $database = [];
    $row = [
        'email' => 'admin@test',
        'name' => 'admin',
        'password' => 'admin'
    ];

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($row['email'] !== $email) {
        $database[] =
            [
                'email' => $email,
                'name' => $name,
                'password' => $password
            ];
        echo "registered";
    } else {
        echo "1";
    }
}
