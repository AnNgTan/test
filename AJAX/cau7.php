<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Cau 7</title>
    <script>
        $(document).ready(function() {
            let submit = $("button[type='submit']");

            submit.click(function(e) {
                let email = $("input[name='email']").val();
                let name = $("input[nam='name']").val();
                let password = $("input[name='password']").val();

                if (email == '') {
                    alert('Vui lòng nhập email');
                    return false;
                }

                if (name == '') {
                    alert('Vui lòng chọn tên đăng nhập');
                    return false;
                }

                if (password == '') {
                    alert('Vui lòng nhập mật khẩu')
                    return false;
                }

                let data = $('#form-register').serialize();
                $.ajax({
                    type: "post",
                    url: './register.php',
                    data: data,
                    success: function(data) {
                        if (data == "1") {
                            $("#error").html('<span style="color: red">Email đã tồn tại</span>');
                        } else if (data == "registered") {
                            $("#error").html('<span style="color: green">Đăng ký thành công</span>');
                            setTimeout('$("#register").load("./dashboard.php");', 2000);
                        }
                    }
                });
                return false;
            })
        })
    </script>
</head>

<body>
    <div id="register">
        <form action="" id="form-register">
            <div id="error"></div>
            <div>
                <label for="">Email</label>
                <br>
                <input type="text" name="email" id="email" placeholder="Email..." />
            </div>

            <div>
                <label for="">Name</label>
                <br>
                <input type="text" name="name" id="name" placeholder="Tên đăng nhập..." />
            </div>

            <div>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Mật khẩu..." />
            </div>
            <button id="btn-login" name="btn-register" type="submit">Register</button>
        </form>
    </div>
</body>

</html>