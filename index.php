<?php
error_reporting(0);
$first = $_POST['answer'];
$op = $_POST['btnop'];
$ans = '';
if ($op == '/') {
    $ans = ($first / $second);
} else if ($op == '-') {
    $ans = ($first - $second);
} else if ($op == '+') {
    $ans = ($first + $second);
} else {
    $ans = $first * $second;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form method="POST" autocomplete="off">
        <!-- <span class="border border-primary"> -->
        <div class="container cal">
            <div class="row">
                <div class="col cols">
                    <input id="txt1" type="text" class="txt_c" placeholder="0" name="answer" value="<?php echo "$first" ?>" minlength="1" maxlength="11" />
                </div>
            </div>
            <div class="row">
                <div class="col-3 col "><input type="button" value="AC" class="btns btns_left btn btn-dark" id="btn_1" onclick="clearr()">
                </div>
                <div class="col-3"><input type="button" value="( )" class="btns btns_mid btn btn-dark" id="btn_2" onclick="number_fn('()')">
                </div>
                <div class="col-3"><input type="button" value="%" class="btns btns_mid btn btn-dark" id="btn_3" onclick="number_fn('%')">
                </div>
                <div class="col-3"><input type="button" value="x" id="btn_divide" class="btns btn btn-dark" name="btnop" onclick="bkspc()"></div>
            </div>
            <div class="row">
                <div class="col-3 col "><input type="button" value="1" class="btns btns_left btn btn-dark" id="btn_1" onclick="number_fn('1')">
                </div>
                <div class="col-3"><input type="button" value="2" class="btns btns_mid btn btn-dark" id="btn_2" onclick="number_fn('2')">
                </div>
                <div class="col-3"><input type="button" value="3" class="btns btns_mid btn btn-dark" id="btn_3" onclick="number_fn('3')">
                </div>
                <div class="col-3"><input type="button" value="/" id="btn_divide" class="btns btn btn-dark" name="btnop" onclick="number_fn('/')"></div>
            </div>
            <div class="row">
                <div class="col-3"><input type="button" value="4" class="btns btns_left btn btn-dark" onclick="number_fn('4')" id="btn_4">
                </div>
                <div class="col-3"><input type="button" value="5" class="btns btns_mid btn btn-dark" id="btn_5" onclick="number_fn('5')">
                </div>
                <div class=" col-3"><input type="button" value="6" class="btns btns_mid btn btn-dark" id="btn_6" onclick="number_fn('6')"> </div>
                <div class=" col-3"><input type="button" value="*" id="btn_multiply" class="btns btn btn-dark" name="btnop" onclick="number_fn('*')"></div>
            </div>
            <div class="row">
                <div class="col-3"><input type="button" value="7" class="btns btns_left btn btn-dark" id="btn_7" onclick="number_fn('7')">
                </div>
                <div class=" col-3"><input type="button" value="8" class="btns btns_mid btn btn-dark" id="btn_8" onclick="number_fn('8')">
                </div>
                <div class=" col-3"><input type="button" value="9" class="btns btns_mid btn btn-dark" id="btn_9" onclick="number_fn('9')">
                </div>
                <div class=" col-3"><input type="button" value="-" id="btn_sub" class="btns btn btn-dark" name="btnop" onclick="number_fn('-')">
                </div>
            </div>
            <div class="row">
                <div class="col-3"><input type="button" value="." class="btns btns_left btn btn-dark" id="btn_dot" onclick="number_fn('.')">
                </div>
                <div class=" col-3">
                    <input type="button" value="0" class="btns btns_mid btn btn-dark" id="btn_zero" onclick="number_fn('0')">
                </div>
                <div class="col-3">
                    <input type="button" value="=" class="btns btns_mid btn btn-dark" id="btn_ac" onclick="calculate()">
                </div>
                <div class="col-3"><input type="button" value="+" id="btn_plus" class="btns btn btn-dark" name="btnop" onclick="number_fn('+')">
                </div>
            </div>

        </div>

        <script>
            function number_fn(num) {
                let old_value = document.getElementById('txt1').value;
                document.getElementById('txt1').value = old_value + num;
            }

            function clearr() {
                document.getElementById("txt1").value = "";
            }

            function calculate() {
                let a = document.getElementById("txt1").value;
                // console.log(typeof a)
                let b = eval(a);
                console.log(b)
                document.getElementById("txt1").value = b;
            }

            function bkspc() {
                let display = document.getElementById("txt1");
                let currentValue = display.value;
                let newValue = currentValue.slice(0, -1);
                display.value = newValue;
            }
        </script>
        <script src="./bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </form>
</body>

</html>