<?php
include("pdo.php");


$url = "http://51.255.160.47:8282/resources/frames.json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: " . $json_data[0]['date'];


echo "<pre>";
foreach ($json_data as $i) {
    print_r($i);
    echo "<br/>";

    

   ==$i['identification']

    $stmt = $connection->prepare("INSERT INTO athjson (list_date, list_version, list_headerLength, list_service, list_identification, list_flags_code, list_ttl, list_protocol_name, list_protocol_checksum_status, list_protocol_ports_from, list_protocol_ports_dest, list_headerChecksum, list_ip_from, list_ip_dest, list_protocol_flags_code, list_protocol_version, list_protocol_contentType, list_protocol_checksum_code, list_protocol_type, list_protocol_code, list_status)
       VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssssssssssssss', $i['date'], $i['version'], $i['headerLength'], $i['service'], $i['identification'], $i['flags']['code'], $i['ttl'], $i['protocol']['name'], $i['protocol']['checksum']['status'], $i['protocol']['ports']['from'], $i['protocol']['ports']['dest'], $i['headerChecksum'], $i['ip']['from'], $i['ip']['dest'], $i['protocol']['ports']['dest'], $i['protocol']['version'], $i['protocol']['contentType'], $i['protocol']['checksum']['code'], $i['protocol']['type'], $i['protocol']['code'], $i['status'],);
    $stmt->execute();
}
$test = $json_data[0]['date'];

print_r($test);
// $colnames = $json_data->getColumnNames();

// print_r($colnames);

echo "</pre>";






// $ch = curl_init();
// IMPORTANT: the below line is a security risk, read https://paragonie.com/blog/2017/10/certainty-automated-cacert-pem-management-for-php-software
// in most cases, you should set it to true
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, 'http://51.255.160.47:8282/resources/frames.json');
// $result = curl_exec($ch);
// curl_close($ch);

// $obj = json_decode($result);
// echo $obj->date;





$sql = "select * from athjson";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

$emparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
}
// echo json_encode($emparray);

// header('Content-disposition: attachment; filename=jsonFile.json');
// header('Content-type: application/json');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<div id='test'></div>";
    ?>
</body>
<script>
    var jsonJs = <?php echo json_encode($emparray) ?>;
    console.log(jsonJs)
    fooArray = Object.entries(jsonJs);
    fooArray.forEach(([key, value]) => {
        console.log(key); // 'one'
        console.log(value); // 1   

    })
    console.log(fooArray[0])
</script>

</html>