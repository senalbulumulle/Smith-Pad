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
