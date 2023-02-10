<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        img {
            width: auto;
            height: 100px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <!-- 
        CÂU 1
     -->

    <div>
        <h4>Câu 1</h4>
        <form action="">
            <textarea onkeydown="checkLength()" onkeyup="checkLength()" class="area" name="" cols="30" rows="10" maxlength="50"></textarea>
            <p class="message" style="color: red"></p>
        </form>
    </div>

    <!-- CÂU 2 -->

    <div>
        <h4>Câu 2</h4>
        <form action="">
            <div>
                <label for="">Date</label>
                <br>
                <input type="text" class="input_date" placeholder="YYYY-MM-DD">
            </div>
            <div>
                <label for="">Period</label>
                <br>
                <input type="text" class="days">
            </div>
            <p class="result"></p>
            <button class="add" onclick="event.preventDefault(); changeDays()">Add</button>
        </form>
    </div>

    <!-- CÂU 3 -->

    <div>
        <h4>Câu 3</h4>
        <form class="q3" action="">
            <div>
                <label for="">First Name</label>
                <br>
                <input type="text" class="firstName" placeholder="">
            </div>
            <div>
                <label for="">Last Name</label>
                <br>
                <input type="text" class="lastName">
            </div>
            <div>
                <label for="">Age</label>
                <br>
                <input type="text" class="age">
            </div>
            <div>
                <label for="">Gender</label>
                <br>
                <input type="text" class="gender">
            </div>
            <br>
            <button class="create">Add</button>
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody class="inner">

            </tbody>
        </table>
    </div>
    <br>

    <!-- CÂU 4: -->

    <div>
        <h4>Câu 4</h4>
        <div id=“slide” style="max-width: 200px">
            <img id=“img1” class="slide" src="img/image001.gif" alt="img1" />
            <img id=“img2” class="slide" src="img/image002.png" alt="img2" />
            <img id=“img3” class="slide" src="image3.jpg" alt="img3" />
            <img id=“img4” class="slide" src="image4.jpg" alt="img4" />
        </div>
        <br>
        <button id=“previous” onclick="plusSlides(-1)">Previous</button>
        <button id=“next” onclick="plusSlides(1)">Next</button>
    </div>
    <script src="./test.js"></script>
</body>

</html>