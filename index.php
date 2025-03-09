<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        if(isset($_POST['bulan'])){
            $bulan = $_POST['bulan'];

            if($bulan== 'December' || $bulan== 'January' || $bulan== 'February'){
                header("Location: winter.php");
            } else if($bulan== 'March' || $bulan== 'April' || $bulan== 'May'){
                header("Location: spring.php");
            } else if($bulan== 'June' || $bulan== 'July' || $bulan== 'August'){
                header("Location: summer.php");
            } else if($bulan== 'September' || $bulan== 'October' || $bulan== 'November'){
                header("Location: autumn.php");
            }
            exit();
        }
    ?>

    <div class="card">
        <div class="card-header">
            <h3>What's the <span style="color: red;">s</span><span style="color: orange;">e</span><span style="color: yellow;">a</span><span style="color: green;">s</span><span style="color: blue;">o</span><span style="color: purple;">n</span> at that time?</h3>
        </div>
        <form method="post">
        <div class="card-body">
            <table>
            <tr>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="January" >
                <label class="form-check-label" for="bulan1">
                  January
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="February" >
                <label class="form-check-label" for="bulan2">
                  February
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="March" >
                <label class="form-check-label" for="bulan3">
                  March
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="April" >
                <label class="form-check-label" for="bulan4">
                  April
                </label></div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="May" >
                <label class="form-check-label" for="bulan5">
                  May
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="June" >
                <label class="form-check-label" for="bulan6">
                  June
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="July" >
                <label class="form-check-label" for="bulan7">
                  July
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="August" >
                <label class="form-check-label" for="bulan8">
                  August
                </label></div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="September" >
                <label class="form-check-label" for="bulan9">
                  September
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="October" >
                <label class="form-check-label" for="bulan10">
                  October
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="November" >
                <label class="form-check-label" for="bulan11">
                  November
                </label></div>
            </td>
            <td>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bulan" value="December" >
                <label class="form-check-label" for="bulan12">
                  December
                </label></div>
            </td>
            </tr>
            </div>
        </table>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn">See Season</button>
        </div>
      </form>
    </div>
</body>
</html>