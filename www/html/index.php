<?php

    // こちらのヘッダーは必要に応じて編集・削除してください。
    header('Access-Control-Allow-Origin: ' . '*');
    header('Access-Control-Allow-Method: ' . 'GET');
    header('Access-Control-Allow-Headers: ' . 'Content-Type');
    header('Access-Control-Allow-Credentials: ' . 'true');
    header('Access-Control-Max-Age: ' . '864000');
    header("Cache-Control:no-cache,no-store,must-revalidate,max-age=0");
    header("Cache-Control:pre-check=0,post-check=0,false");
    header("Pragma:no-cache");
    header('Content-Disposition: inline; filename="data.json"');

    // 以下のヘッダーはJSONデータとしてレスポンスを返す場合に必須です。
    header('Content-Type: application/json; charset=utf-8');
    

    $json_data = [
        "text" => "Hello World!!"
    ];

    $json_str = json_encode($json_data,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    print_r($json_str);