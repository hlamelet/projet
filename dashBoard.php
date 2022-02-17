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
    <!-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="dashBoard.css">


    <title>Document</title>
</head>

<body>
    <nav class="nav">
        <a href="" class="logo">
            <i class="bi bi-lighbulb"></i>
            <img class="logoath" src="imgs/logo.png" alt="">
        </a>
        <ul class="menu">
            <li class="users"><a href=""><i class="bi bi-person-circle"></i>
                    Session :<span> Admin</span>
            <li class="active"><a href=""><i class="bi bi-house-fill"></i><span>Dashboard</span>
                </a></li>
            <li class="accuiel"><a href="index.php"><i class="bi bi-box-arrow-left"></i><span>Accueil</span>
                </a></li>
        </ul>
    </nav>

    <main class="content">
        <header class="header">
            <button type="button" class="button toggle-menu active">
                <i class="bi bi-list"></i>
                <span>Dashboard</span>
            </button>
            <form action="" class="form">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </header>

        <section class="section">
            <div class="container-fluid container-content cards">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                                <span>100</span>
                                <p>Utilisateurs connectée</p>
                            </div>
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                            <span>10</span>
                                <p>Serveur Actif</p>
                            </div>
                            <i class="bi bi-server"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                            <span> 4</span>
                                <p>Type de protocole Actif</p>
                            </div>
                            <i class="bi bi-ui-checks"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card shadow">
                            <div class="desc">
                            <span>TEST</span>
                                <p>Total 10</p>
                            </div>
                            <i class="bi bi-wifi"></i>
                        </div>
                    </div>
                </div>

                <div class="graph" style="display: flex;flex-wrap: wrap;">
                    <div class="graphBlock" style="width: 300px;height: 300px;">
                        <label class="graphLabel">Le nombre de trames par type de requête</label>
                        <canvas id="typeDeRequete" width="240px" height="240px" class="canvas"></canvas>
                    </div>
                    <div class="graphBlock">
                        <label class="graphLabel">Le nombre de requête en échec</label>
                        <canvas id="statutDuProtocole" width="240px" height="240px" class="canvas"></canvas>
                    </div>
                    <div class="graphBlock">
                        <label class="graphLabel">Le nombre d'envoi par ip</label>
                        <canvas id="ipEnvoi" width="240px" height="240px" class="canvas"></canvas>
                    </div>
                    <div class="graphBlock">
                        <label class="graphLabel">Le nombre de reception par ip</label>
                        <canvas id="ipReception" width="240px" height="240px" class="canvas"></canvas>
                    </div>
                </div>
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


                <?php include("graphique\graphiqueTypeDeRequete.php") ?>


        </section>
    </main>

    <!-- <div>
        <canvas id="TTLPerdu" width="240px" height="240px"></canvas>
    </div>
    <div>
        <canvas id="statutDuProtocole" width="240px" height="240px"></canvas>
    </div> -->













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

        // $(function() {
        //     var ctx_2 = document.getElementById("typeDeReete").getContext('2d');
        //     var data_2 = {
        //         datasets: [{
        //             data: [10, 20, 30],
        //             backgroundColor: [
        //                 '#3c8dbc',
        //                 '#f56954',
        //                 '#f39c12',
        //             ],
        //         }],
        //         labels: [
        //             <?php echo $labelsTypeDeRequete ?>
        //         ]
        //     };
        //     var myDoughnutChart_2 = new Chart(ctx_2, {
        //         type: 'doughnut',
        //         data: data_2,
        //         options: {
        //             responsive: false,
        //             maintainAspectRatio: false,
        //             legend: {
        //                 position: 'bottom',
        //                 labels: {
        //                     boxWidth: 12
        //                 }
        //             }
        //         }
        //     });
        // });
    </script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script> -->

</body>

</html>