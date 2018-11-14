<?php


$access_token = 'mrrQNdQKAKiHtb4VXD6hajpweXumKByk+gUV4/EbXkqHNIFP4KWRpRvUfcM6SlkCUMDbXvyznyVIiNoKg5WD8LP6pzxYiUGprqCx9D2VTxV+SdeeBsw+RUfC/TT0MsJMMAePhskLjKxTYrrCZxY4jgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
