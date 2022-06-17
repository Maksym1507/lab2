<!DOCTYPE HTML>
<html>

<head>
    <title>Lb2</title>
    <script>
        function getcarrier(){
        let key = document.getElementById("carrier").value;
        let value = localStorage.getItem(key);
        document.getElementById("localStorage").innerHTML = value;
        }
        function getactor(){
            let key = document.getElementById("actor").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
        function getdate(){
            let key = document.getElementById("date").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
    </script>
</head>

<body>
    <form method="GET" action="carrier.php">
    <p>Фильмы c носителем <select name="carrier" id="carrier" onchange="getcarrier()">
            <?php
            include 'connect.php';
            $carrier = $db->distinct("carrier");

            foreach ($carrier as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="actor.php">
        <p>Фильмы с актером <select name="actor" id="actor" onchange="getactor()">
        <?php
            include 'connect.php';
            $actor = $db->distinct("actor");

            foreach ($actor as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="date.php">
        <p>Фильмы выпущенные в <select name="date" id="date" onchange="getdate()">
        <?php
            include 'connect.php';
            $carrier = $db->distinct("date");
            foreach ($carrier as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button> </p>
    </form>
<p> Сохраненные результаты (<b>localStorage</b>): </p>
<p id="localStorage"></p>
</body>

</html>