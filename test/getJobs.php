<?php


$request_url = "https://api.datacruit.com/advertising/jobAds/";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $request_url,
    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
    CURLOPT_USERPWD => 'web@aspen-staff.com:Pl49_hjt6Yzf3'
));

$response = json_decode(curl_exec($curl));
$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$error = curl_error($curl);
curl_close($curl);

$arrayToReturn = array();

if (($error != '') || ($responseCode != '200')) {
    echo "Error";
    return;
}

$id = 0;
foreach ($response as $row) {
    $arrayToReturn[$id]["id"] = $row->id;
    $arrayToReturn[$id]["title"] = $row->title;
    $id++;
}

// print("<pre>".print_r($arrayToReturn,true)."</pre>");

echo json_encode($arrayToReturn);