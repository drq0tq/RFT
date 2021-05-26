<?php
include 'index.php';
?>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <style>
        font-family: caption arial;
        font-size: 20px;

        p {
            font-size: 20px;
        }

        #container {
            width: 40%;
            padding: 20px 50px 20px 20px;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            font-family: cursive;
            background-color: #ffdd99;
        }

        input[type="reset"],
        input[type="submit"] {
            background: #b32d00;
            color: #ffcc99;
            border: 2px solid #ffcc99;
            padding: 10px 20px;
            font-size: 30px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            margin: 0px 10px 0px 10px;
        }

        input[type="reset"]:hover,
        input[type="submit"]:hover {
            background: #ff9966;
            color: #660000;
            border: 2px solid #660000;
            padding: 10px 20px;
            font-size: 32px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            margin: 0 10px 0 10px;
        }

        #kepfeltöltcim {
            margin-top: 20px;
        }

        #kepfeltöltmeret {
            font-size: 17px;
        }

        #kepfeltöltes {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div>
        <div id="container" align="center" id="mezo">
            <p>Ha már fogadtál örökbe az oldalunkon keresztül, itt tudsz nekünk képet küldeni, hogy lássuk szerető otthonra lelt nálatok a kutyus.</p>
            <br>
            <img src="happy_puppy.jpg" width="70%" align="center">

            <table id=kepfeltöltes>
                <form action="orokbefogadott_kepfeltöltes.php" method="POST" enctype="multipart/form-data">
                    <h1 id=kepfeltöltcim>Képfeltöltés</h1>
                    <h5 id=kepfeltöltmeret>A kép mérete legfeljebb 5MB lehet és a maximum felbontás 1920x1080.</h5>
                    <tr>
                        <div>
                            <input style="padding:5px;" type="file" name="kép">
                        </div>
                    </tr>
                    <input type="reset" name="reset" value="Mégse">
                    <input type="submit" name="submit" value="Feltöltés" />
                </form>
            </table>
        </div>
    </div>
</body>

</html>