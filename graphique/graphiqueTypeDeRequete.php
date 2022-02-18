<?php
//recup de la bdd--------------------------------------------------------
$sql = "select * from `athjson` WHERE 1";
$result = mysqli_query($connection, $sql);
//bdd dans un tableau
$jsonparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $jsonArray[] =  $row['list_protocol_name'];
    $jsonTTL[] = $row['list_ttl'];
    $statutDuProtocole[] = $row['list_protocol_checksum_status'];
    $ipEnvoi[] = $row['list_ip_from'];
    $ipReception[] = $row['list_ip_dest'];
}
//transformation du tableau en plusieur string envoyé dans le chart.Js
$jsonArray = array_count_values($jsonArray);

foreach ($jsonArray as $key => $i) {
    if ($i != null) {
        $strArray[] = "'" . $key . "'";
        $valueArray[] = $i;
        $couleurArray[] = "'" . sprintf('#%06X', mt_rand(0, 0xFFFFFF)) . "'";
    }
}
$nbrTypeRequete = count($strArray);
$labelsTypeDeRequete = implode(",", $strArray);
$valeurTypeDeRequete = implode(",", $valueArray);
$couleurTypeDeRequete = implode(",", $couleurArray);
//ttl perdu---------------------------------------
$ttlPerdu = 0;
foreach ($jsonTTL as $i) {
    $ttlPerdu += (128 - $i);
}
//statut protocole---------------------------------------
$statutDuProtocole = array_count_values($statutDuProtocole);



foreach ($statutDuProtocole as $key => $i) {
    if ($i != null) {
        $labelsStatutDuProtocole[] = "'" . $key . "'";
        $ValeurStatutDuProtocole[] = $i;
        $couleurArray[] = "'" . sprintf('#%06X', mt_rand(0, 0xFFFFFF)) . "'";
    }
}
$labelsStatutDuProtocole = implode(",", $labelsStatutDuProtocole);
$ValeurStatutDuProtocole = implode(",", $ValeurStatutDuProtocole);
// ----------------------------------------ip envoi
$ipEnvoi = array_count_values($ipEnvoi);
foreach ($ipEnvoi as $key => $i) {
    $labelsIpEnvoi[] = "'" . $key . "'";
    $ValeurIpEnvoi[] = $i;
}
$labelsIpEnvoi = implode(",", $labelsIpEnvoi);
$ValeurIpEnvoi = implode(",", $ValeurIpEnvoi);
// ----------------------------------------ip reception
$ipReception = array_count_values($ipReception);
foreach ($ipReception as $key => $i) {
    $labelsIpReception[] = "'" . $key . "'";
    $ValeurIpReception[] = $i;
}
$labelsIpReception = implode(",", $labelsIpReception);
$ValeurIpReception = implode(",", $ValeurIpReception);
// -----------------------------------choix des couleurs

//------------------------------------------compte crées
$query = "SELECT * FROM user WHERE 1";
$result = mysqli_query($connection, $query);
$comptecree = (string)mysqli_num_rows($result);

// -------------------------------------------------debug

$couleurStatut = "'#FF0000','#008000'";

?>

<!-- -------------------------------type de requete -->
<script>
    $(function() {

        var ctx = document.getElementById("typeDeRequete").getContext('2d');
        var data = {
            datasets: [{
                data: [<?php echo $valeurTypeDeRequete ?>],
                backgroundColor: [<?php echo $couleurTypeDeRequete ?>],
            }],
            labels: [
                <?php echo $labelsTypeDeRequete ?>
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
<!-- --------------------------------------------------statut du protocole------------------------------------------- -->
<script>
    $(function() {

        var ctx = document.getElementById("statutDuProtocole").getContext('2d');
        var data = {
            datasets: [{
                data: [<?php echo $ValeurStatutDuProtocole ?>],
                backgroundColor: [<?php echo $couleurStatut ?>]
            }],
            labels: [
                <?php echo $labelsStatutDuProtocole ?>
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
<!-- --------------------------------------------------ip d'envoi------------------------------------------- -->
<script>
    $(function() {

        var ctx = document.getElementById("ipEnvoi").getContext('2d');
        var data = {
            datasets: [{
                data: [<?php echo $ValeurIpEnvoi ?>],
                backgroundColor: [<?php echo $couleurTypeDeRequete ?>]
            }],
            labels: [
                <?php echo $labelsIpEnvoi ?>
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
<!-- -----------------------------------------------------ip de reception---------------------------------------- -->
<script>
    $(function() {

        var ctx = document.getElementById("ipReception").getContext('2d');
        var data = {
            datasets: [{
                data: [<?php echo $ValeurIpReception ?>],
                backgroundColor: [<?php echo $couleurTypeDeRequete ?>]
            }],
            labels: [
                <?php echo $labelsIpReception ?>
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