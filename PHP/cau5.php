<?php
//CÂU 5:
$file_path = "./main.csv";
if (file_exists($file_path)) :
    $file = fopen($file_path, "r");
    $csv = fgetcsv($file, 1024, ',');

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
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php while ((($csv = fgetcsv($file, 1024, ',')) != FALSE) || (!feof($file))) : ?>
                    <tr>
                        <td><?= $csv[0] ?></td>
                        <td><?= $csv[1] ?></td>
                        <td><?= $csv[2] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>

        </table>
    </body>

    </html>
<?php
    fclose($file);
endif; ?>