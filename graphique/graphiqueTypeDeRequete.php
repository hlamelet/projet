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
}
//transformation du tableau en plusieur string envoyé dans le chart.Js
$jsonArray = array_count_values($jsonArray);
print_r($jsonArray);
foreach ($jsonArray as $key => $i) {
    if ($i != null) {
        $strArray[] = "'" . $key . "'";
        $valueArray[] = $i;
        $couleurArray[] = "'" . sprintf('#%06X', mt_rand(0, 0xFFFFFF)) . "'";
    }
}
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
print_r($statutDuProtocole);

foreach ($statutDuProtocole as $key => $i) {
    if ($i != null) {
        $labelsStatutDuProtocole[] = "'" . $key . "'";
        $ValeurStatutDuProtocole[] = $i;
        $couleurArray[] = "'" . sprintf('#%06X', mt_rand(0, 0xFFFFFF)) . "'";
    }
}
$labelsStatutDuProtocole = implode(",", $labelsStatutDuProtocole);
$ValeurStatutDuProtocole = implode(",", $ValeurStatutDuProtocole);
print_r($labelsStatutDuProtocole);
print_r($ValeurStatutDuProtocole);
$couleurStatut = "'#FF0000','#008000'";
?>


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
<!-- --------------------------------------------------------------------------------------------- -->
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