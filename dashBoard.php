<?php
include("pdo.php");

// ------------------------------------------------------------sécurité 
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
// ------------------------------------------------------------JSON vers la BDD
$url = "http://51.255.160.47:8282/resources/frames.json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);


echo "<pre>";
foreach ($json_data as $i) {

    $idAVerif = $i['identification'];
    $dateAVerif = $i['date'];
    $checkDate = $pdo->prepare("SELECT * FROM athjson WHERE list_date = '$dateAVerif' AND list_identification = '$idAVerif';");
    $checkDate->execute();
    $date = $checkDate->fetch();


    if (empty($date)) {

        $stmt = $connection->prepare("INSERT INTO athjson (list_date, list_version, list_headerLength, list_service, list_identification, list_flags_code, list_ttl, list_protocol_name, list_protocol_checksum_status, list_protocol_ports_from, list_protocol_ports_dest, list_headerChecksum, list_ip_from, list_ip_dest, list_protocol_flags_code, list_protocol_version, list_protocol_contentType, list_protocol_checksum_code, list_protocol_type, list_protocol_code, list_status)
           VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssssssssssssssss', $i['date'], $i['version'], $i['headerLength'], $i['service'], $i['identification'], $i['flags']['code'], $i['ttl'], $i['protocol']['name'], $i['protocol']['checksum']['status'], $i['protocol']['ports']['from'], $i['protocol']['ports']['dest'], $i['headerChecksum'], $i['ip']['from'], $i['ip']['dest'], $i['protocol']['ports']['dest'], $i['protocol']['version'], $i['protocol']['contentType'], $i['protocol']['checksum']['code'], $i['protocol']['type'], $i['protocol']['code'], $i['status'],);
        $stmt->execute();
    }
}
// $test = $json_data[0]['date'];

// print_r($test);



// ------------------------------------------------------------BDD vers ARRAY
$sql = "select * from `athjson` WHERE 1";
$result = mysqli_query($connection, $sql);

$emparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
}

echo "</pre>";

?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="datatable.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/dashBoard.css">


    <title>Document</title>
</head>

<body>

    <!-- ---------------------------------------------------------- TABLEAU -->
    <div class="table">
        <table id='myTable'>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Ip destination</th>
                    <th>Ip source</th>
                    <th>date</th>
                    <th>nom du protocole</th>
                    <th>ports de destination</th>
                    <th>ports de source</th>
                    <th>statut du protocole</th>
                    <th>ttl</th>
                </tr>
            </thead>

        </table>
    </div>
    <!-- --------------------------------------------------------------------type de requete HTML -->
    <div>
        <canvas id="typeDeRequete" width="240px" height="240px"></canvas>
    </div>
    <?php
    $sql = "select * from `athjson` WHERE 1";
    $result = mysqli_query($connection, $sql);

    $jsonparray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $jsonArray[] = "\"" . $row['list_protocol_name'] . "\"";
    }
    print_r(array_unique($jsonArray));


    ?>
    <script>
        $(function() {
            /*from   w ww .  ja va2 s  . c o  m*/
            var ctx = document.getElementById("typeDeRequete").getContext('2d');
            var data = {
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39cFF',
                    ],
                }],
                labels: [
                    'UDP',
                    'TCP',
                    'ICMP',

                ]
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });
        });
    </script>
    <!-- --------------------------------------------------------------------autre graphique -->
    <div>
        <canvas id="layanan_subbagian" width="240px" height="240px"></canvas>
    </div>

</body>












<script>
    // ------------------------------------------------------------ ARRAY TO JSON


    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        serverMethod: "post",
        ajax: {
            url: 'callAjax.php'
        },
        columns: [{
                data: "list_identification"
            },
            {
                data: "list_ip_dest"
            },
            {
                data: "list_ip_from"
            },
            {
                data: "list_date"
            },
            {
                data: "list_protocol_name"
            },
            {
                data: "list_protocol_ports_dest"
            },
            {
                data: "list_protocol_ports_from"
            },
            {
                data: "list_protocol_checksum_status"
            },
            {
                data: "list_ttl"
            },
        ]
    });



    // ------------------------------------------------------------ INSERTION DU JSON DANS LE TABLEAU

    // --------------------------------------------------------------Le nombre de trames par type de requête

    $(function() {
        var ctx_2 = document.getElementById("layanan_subbagian").getContext('2d');
        var data_2 = {
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: [
                    '#3c8dbc',
                    '#f56954',
                    '#f39c12',
                ],
            }],
            labels: [
                'UDP',
                'TCP',
                'ICMP'
            ]
        };
        var myDoughnutChart_2 = new Chart(ctx_2, {
            type: 'doughnut',
            data: data_2,
            options: {
                responsive: false,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 12
                    }
                }
            }
        });
    });
</script>


</html>