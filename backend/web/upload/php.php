<?php
$uri = "http://tuling123.com/openapi/api";
// 参数数组
$data = array (
        'key' => '47663d1375d648549ce82cabd93eecae',
        'info' => '讲个笑话'
);

$ch = curl_init ();
// print_r($ch);
curl_setopt ( $ch, CURLOPT_URL, $uri );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
$return = curl_exec ( $ch );
curl_close ( $ch );

print_r($return);

