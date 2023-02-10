<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <ul id=“menu”>
        <li class=“menu-item”>Home</li>
        <li class=“menu-item has-sub”>
            <a href=“#”>About</a>
            <div class="sub">
                <ul class=“sub-menu”>
                    <li class=“menu-item”>From 2010</li>
                    <li class=“menu-item”>Vision</li>
                </ul>
            </div>
        </li>
        <li class=“menu-item has-sub”>
            <a href=“#”>Product</a>
            <div class="sub">
                <ul class=“sub-menu”>
                    <li class=“menu-item”>Clothes</li>
                    <li class=“menu-item”>Shirts</li>
                    <li class=“menu-item”>Phones</li>
                </ul>
            </div>
        </li>
        <li class=“menu-item has-sub”>
            <a href=“#”>Blog</a>
            <div class="sub">
                <ul class=“sub-menu”>
                    <li class=“menu-item”>New Arrival</li>
                    <li class=“menu-item”>Look books</li>
                </ul>
            </div>
        </li>
        <li class=“menu-item”>FAQ</li>
        <li class=“menu-item”>Contact</li>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("ul li a").click(function() {
                let li = $(this).parent();

                if (li.hasClass("selected")) {
                    li.removeClass("selected");
                    return false;
                } else {
                    $("ul li").removeClass("selected");

                    li.addClass("selected");
                }

                return false;
            });
        })
    </script>
</body>

</html>