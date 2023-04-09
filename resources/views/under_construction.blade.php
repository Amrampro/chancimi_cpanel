<?php
foreach ($data as $d) {
    $date = $d->end_date;
}
// $date = '2023-04-04 23:39:00';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Chancimi Sarl</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('comingsoon') }}/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('comingsoon') }}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('comingsoon') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('comingsoon') }}/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div id="data"></div>
    <input type="hidden" id="date" value="<?php echo $date; ?>">
    <div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15"
        style="background-image: url('{{ asset('comingsoon') }}/images/bg02.jpg');">
        <div class="wsize1">
            <p class="txt-center p-b-23">
                <i class="zmdi zmdi-card-giftcard cl0 fs-60"></i>
            </p>

            <h3 class="l1-txt1 txt-center p-b-22">
                Bientôt disponible
            </h3>

            <p class="txt-center m2-txt1 p-b-67">
                Notre site Web est en construction, suivez-nous pour les actualités à venir !
            </p>

            <div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
                <div class="flex-col-c-m wsize2 m-b-20">
                    <span id="days" class="l1-txt2 p-b-4">35</span>
                    <span class="m2-txt2">Jours</span>
                </div>

                <span class="l1-txt2 p-b-22">:</span>

                <div class="flex-col-c-m wsize2 m-b-20">
                    <span id="hours" class="l1-txt2 p-b-4">17</span>
                    <span class="m2-txt2">Heures</span>
                </div>

                <span class="l1-txt2 p-b-22 respon2">:</span>

                <div class="flex-col-c-m wsize2 m-b-20">
                    <span id="minutes" class="l1-txt2 p-b-4">50</span>
                    <span class="m2-txt2">Minutes</span>
                </div>

                <span class="l1-txt2 p-b-22">:</span>

                <div class="flex-col-c-m wsize2 m-b-20">
                    <span id="seconds" class="l1-txt2 p-b-4">39</span>
                    <span class="m2-txt2">Secondes</span>
                </div>
            </div>

            <form class="flex-w flex-c-m contact100-form validate-form p-t-70" method="post"
                action="{{ url('/newsletter') }}">
                @csrf
                <div class="wrap-input100 validate-input where1" data-validate="Email is required: ex@abc.xyz">
                    <input class="s1-txt1 placeholder0 input100" type="text" name="email"
                        placeholder="Adresse email">
                    <span class="focus-input100"></span>
                </div>

                <button class="flex-c-m s1-txt1 size2 how-btn trans-04 where1" type="submit">
                    Me notifier
                </button>
                @if (Session::has('success'))
                    <i>
                        <p style="color:green">{{ session('success') }}</p>
                    </i>
                @endif
            </form>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{ asset('comingsoon') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('comingsoon') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ asset('comingsoon') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function func() {
            var dateValue = document.getElementById("date").value;

            var date = Math.abs((new Date().getTime() / 1000).toFixed(0));
            var date2 = Math.abs((new Date(dateValue).getTime() / 1000).toFixed(0));

            var diff = date2 - date;

            var days = Math.floor(diff / 86400);
            var hours = Math.floor(diff / 3600) % 24;
            var minutes = Math.floor(diff / 60) % 60;
            var seconds = diff % 60;

            if (diff < 0) {
                seconds = 0;
                minutes = 0;
                hours = 0;
                days = 0;
            }

            if (days < 10) {
                days = "0" + days;
            }

            if (hours < 10) {
                hours = "0" + hours;
            }

            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            if (seconds < 10) {
                seconds = "0" + seconds;
            }

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

        }

        func();
        setInterval(func, 1000);
    </script>
</body>

</html>
