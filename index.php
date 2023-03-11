<?php

$num = "";
$result = "";
$cookieChar1 = "num";
$cookie_valone = "";
$cookieChar2 = "operator";
$cookie_valTwo = "";

if (isset($_POST['display'])) {
    $num = $_POST['display'];
} else {
    $num = "";
}

if (isset($_POST['submit'])) {
    $num = $_POST['display'] . $_POST['submit'];
} else {
    $num = "";
}

if (isset($_POST['operator'])) {

    $cookie_valone = $_POST['display'];
    setcookie($cookieChar1, $cookie_valone, time() + (86400 * 30), "/");

    $cookie_valTwo = $_POST['operator'];
    setcookie($cookieChar2, $cookie_valTwo, time() + (86400 * 30), "/");
    $num = "";
}

if (isset($_POST['equals'])) {
    $num = $_POST['display'];

    switch ($_COOKIE['operator']) {
        case '+':
            $result = $_COOKIE['num'] + $num;
            break;
        case '-':
            $result = $_COOKIE['num'] - $num;
            break;
        case '÷':
            $result = $_COOKIE['num'] / $num;
            break;
        case '×':
            $result = $_COOKIE['num'] * $num;
            break;
    }
    $num = $result;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT IN ITEC65B</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Wallpoet&display=swap">
    <link rel="stylesheet" href="style.css">
</head>

<body oncontextmenu="return false" unselectable="on" onselectstart="return false;" onmousedown="return true;" ondragstart="return false">

    <div class="background-img"></div>
    <center>
        <form action="#" method="post" autocomplete="off">

            <table>
                <tr>
                    <th>
                        <h1>.:: SIMPLE CALCULATOR::.</h1>
                    </th>
                </tr>
            </table>

            <div class="container">
                <table class="wider">
                    <tr>
                        <td><br> </td>
                    </tr>
                    <tr>
                        <td colspan="4"> <input type="text" name="display" placeholder="0" value="<?php echo $num; ?>" /> </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> <input type="submit" id="clearing-button" name="display" onclick='clear()' value="clear" /> </td>
                    </tr>
                    <tr>
                        <td> <input class="buttonnum" type="submit" name="submit" value="7"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="8"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="9"> </td>
                        <td> <input class="button" type="submit" name="operator" value="÷"></td>
                    </tr>
                    <tr>
                        <td> <input class="buttonnum" type="submit" name="submit" value="4"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="5"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="6"> </td>
                        <td> <input class="button" type="submit" name="operator" value="×"></td>
                    </tr>
                    <tr>
                        <td> <input class="buttonnum" type="submit" name="submit" value="1"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="2"> </td>
                        <td> <input class="buttonnum" type="submit" name="submit" value="3"></td>
                        <td> <input class="button" type="submit" name="operator" value="-"> </td>
                    </tr>
                    <tr>
                        <td> <input class="buttonnum" type="submit" name="submit" value="0"> </td>
                        <td> <input class="button" type="submit" name="submit" value="."></td>
                        <td> <input class="button" type="submit" name="equals" value="="></td>
                        <td> <input class="button" type="submit" name="operator" value="+"></td>
                    </tr>
                    <tr>
                        <td> <br> </td>
                    </tr>
                </table>
            </div>

        </form>
        <br>
        <table class="table-submitters">
            <tr>
                <td><br> </td>
            </tr>
            <tr>
                <th> SECTION: BSIT-2F</th>
            </tr>
            <tr>
                <td><br> </td>
            </tr>
            <tr>
                <th class="submitters">
                    <table class="submargine">
                        <tr>
                            <td>
                                <h4> Submitted by: <h4>
                            </td>
                        </tr>
                        <tr>
                            <td> Lyra Lingad</td>
                        </tr>
                        <tr>
                            <td>Risty Ann Bahian</td>
                        </tr>
                        <tr>
                            <td>John Paul Miraflores</td>
                        </tr>
                    </table>
                    <br>
                </th>
            </tr>
        </table>
    </center>

</body>

</html>