<?php
$url = "https://capacity.cegeka.com/api/v1.0/GetParkingAvailability/poml;paren";

// Initialiseer cURL
$ch = curl_init();

// Stel cURL opties in
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Voer de aanvraag uit
$response = curl_exec($ch);

// Controleer op fouten
if (curl_errno($ch)) {
    die("cURL fout: " . curl_error($ch));
}

curl_close($ch);

// Decodeer de JSON naar een associatieve array
$data = json_decode($response, true);

// Haal availability eruit
$availability = $data['data'][0]['availability'];

echo '<div style="color:white;font-size:70px;font-weight:bold;text-align:right;">'.$availability."</div>";
?>
