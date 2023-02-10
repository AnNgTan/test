<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cau 6</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#search-text").keyup(function() {
                let txt = $(this).val();
                if (txt != '') {
                    $.ajax({
                        url: "./demo.php",
                        data: {
                            search: txt
                        },
                        type: "post",
                        dataType: 'text',
                        success: function(data) {
                            $('#content').html(data);
                        }
                    })

                } else {
                    $('#content').html('');
                    $.ajax({
                        url: "./demo.php",
                        data: {
                            search: txt
                        },
                        type: "post",
                        dataType: "text",
                        success: function(data) {
                            $('#content').html(data);
                        }
                    });
                }
            });

        });
    </script>
</head>

<body>
    <input type="text" id="search-text" name="search-text" placeholder="Country search" size="50" />
    <h4>Result: </h4>
    <div id="content" style="margin-top: 20px;"></div>
</body>

</html>