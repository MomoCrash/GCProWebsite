<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>


    <!-- Grand Calendrier de présentation de la semaine a venir -->

    <div>
        <div id="calendar" class="calendar"></div>
        <button id="next"> Next </button>
        <button id="previous"> Previous </button>
        <button id="reserver"> Reserver </button>
    </div>

    <?php 
    
    if (isset($_GET["date"])) {
        echo $_GET["date"];
    }

    ?>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/booking.js"></script>

</body>

</html>