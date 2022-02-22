<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-image: url("colorjersey/fondo.jpg");
            background-color: palevioletred;
        }

        img {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <title>ResultadoEncuestaTest</title>
</head>

<body>

    <?php
    //conecting
    require "includes/conected.php";

    if (isset($_POST["enviar"])) {
        //saving vote
        if (isset($_POST['color']) != "") {
            $color = $_POST["color"];
            $userName = $_POST["userName"];
            $sql = "INSERT INTO votos (color, username )
                                    VALUES ('$color','$userName')";
            $conn->query($sql);
        }
    }
    ?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid navbar-brand">
            <div class="navbar-brand">
                <img src="colorjersey\logo.png" alt="Logo Perruno" width="30" height="24" class="d-inline-block align-text">
                <h5 class="d-inline-block align-text"> <b>Vota, opina y diviertete.</h5>
            </div>
            <button class="btn btn-outline-light" type="submit">Home</button>
        </div>
    </nav>

    <div class="mx-auto" style="width: 600px;">

        <h2 style="text-align: center;"> <b>Resultados de la votación.</h2>
        <h5 style="text-align: center;margin-top: 10px;">Gracias por participar su voto ha sido guardado correctamente.</h5>
        <h5 style="text-align: center;margin-top: 10px;">Proximamente podrás interactuar con los votantes, por comentarios.</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4  mx-auto" style="width: 600px;">
                <h3>El recuento de votos para cada color es:</h3>

                <?php
                //Proyectar votos totales.
                $sql = "SELECT color, COUNT(color) as cuenta FROM `votos` GROUP BY color";
                $resultado = $conn->query($sql);

                $color_array = array();

                if ($resultado->num_rows > 0) {

                    while ($row = $resultado->fetch_assoc()) {

                        $color_array[] = $row; // Adding to array
                    }
                }
                //Transfering data to javascript
                echo "<script> var color_total = " . json_encode($color_array) . "</script>";
                ?>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script>
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    // Draw the pie chart when Charts is loaded.
                    google.charts.setOnLoadCallback(draw_my_chart);
                    // Callback that draws the pie chart
                    function draw_my_chart() {
                        console.log(color_total);
                        // Create the data table .
                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'color');
                        data.addColumn('number', 'cuenta');
                        for (i = 0; i < color_total.length; i++)
                            data.addRow([color_total[i]['color'], parseInt(color_total[i]['cuenta'])]);
                        // above row adds the JavaScript two dimensional array data into required chart format
                        var options = {
                            width: 450,
                            height: 400,
                            backgroundColor: 'transparent'
                        };
                        console.log("here2");

                        console.log(data);
                        // Instantiate and draw the chart
                        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                        console.log("here3");

                    }
                </script>
                <div id="chart_div"></div>
                <?php

                $sql2 = "SELECT color, count(*)
                from votos
                group by color
                having count(*) = (select max(total)
                from (
                select color,  count(*) as total
                FROM votos
                group by color) count_table);";

                $resultado = $conn->query($sql2);
                $row = $resultado->fetch_row();
                echo "<h3><br>El color con más voto es el " . $row[0];
                echo " con " . $row[1] . " votos.</h3>";

                $conn->close();
                ?>

            </div>
            <div class="col-md-4 ">
                    <img src="images\awesome.png" alt="awesoneGirl" width="450" height="500">
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>