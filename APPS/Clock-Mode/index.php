<!-- Clock Mode for Smith-Pad  -->

<!- Written by Senal Bulumulle -->

<html>

<head>
    <title>Clock-Mode</title>
    <link rel="stylesheet" href="../../src/UI.css" type="text/css">
    <link rel="stylesheet" href="../../src/position-text.css" type="text/css">
    <link rel="stylesheet" href="../../src/index.css" type="text/css">
</head>

<body>
    <div class="bar">
        <?php include "../../System_Files/system.global.space.6.php"?>
        <a href="../../index.php" class="button">BACK</a>
    </div>

    <?php include "../../System_Files/system.global.space.2.php"?>
    <?php include "../../System_Files/system.global.space.17.php"?>
    <?php include "../../System_Files/system.global.space.10.php"?>
    <?php include "../../System_Files/system.global.space.14.php"?>

    <div class="center">
        <fontsize200>
            <fontcolorWHITE>

                <div id="senalClock"></div>

                <script type="text/javascript">
                    function GetClock() {
                        var d = new Date();
                        var senalhour = d.getHours(),
                            senalmin = d.getMinutes();
                        if (senalmin <= 9) senalmin = "0" + senalmin
            
                        var senal_clock_text = "" + senalhour + ":" + senalmin + "";
                        document.getElementById('senalClock').innerHTML = senal_clock_text;
                    }
            
                    GetClock();
                    setInterval(GetClock, 1000);
                </script>

        </fontsize200>
        </fontcolorWHITE>
    </div>

</body>

</html>
