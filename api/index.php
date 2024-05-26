<?php
ini_set('memory_limit', '-1');
set_time_limit(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');


if (isset($_GET["url"])) {
    $url = urldecode($_GET["url"]);

    $options = [
        "http" => [
            "header" => "Content-Type: video/mp4",
            "method" => "GET",
			"follow_location" => true
        ]
    ];

    $context = stream_context_create($options);
    $content = file_get_contents($url, false, $context);
        header('Content-Disposition: attachment; filename="myfiles.mp4"');
        header("Content-Type: video/mp4");
     echo $content;

} else {
    http_response_code(400);
    echo "Missing 'url' parameter";
}

?>
