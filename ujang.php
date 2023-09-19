<?php
$data = [
    'api_key' => 'fCt8ecnnhYsfehOpwEpzyXeKLWItmKfXUgYva4f19An3s',
    'bank'  => 'dana',
    'norekening'  => 'nomor_rekening',
    'start_date'  => '2023-09-16',
    'end_date' => '2023-09-19'
];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://xavi3r.tech/apiv2/query",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($data))
);

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
