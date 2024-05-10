
<?php
set_time_limit(0); // 
ignore_user_abort(true);
//ini_set('max_execution_time', 0);
//ini_set("memory_limit", "-1");
//curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest"));

 
 
 $targetFile = fopen('testfjhile.mp3', 'w');

$ch = curl_init('https://cors-anywhere.herokuapp.com/https://rr1---sn-p5qlsn7d.googlevideo.com/videoplayback?expire=1715201208&ei=WJA7ZpqyGOmKkucPss6A2AE&ip=172.70.34.18&id=o-AMZDB1pIR47Aj1XEsGFOlYLVmCtfRu4XooHlt9Ikb0po&itag=251&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=NN&mm=31%2C26&mn=sn-p5qlsn7d%2Csn-ab5l6nrr&ms=au%2Conr&mv=m&mvi=1&pl=24&gcr=us&initcwndbps=38750&bui=AWRWj2QeNICePnwPs7Kc1e53NzJq6tj1GNiptzKNXJoE6lloLKhsECRGwjMXDSof8i0iyIqR95OqG1CA&spc=UWF9fxE86kTqGrTgOWqxEc9Txmj2Wf6Xm-QlK1I3S3l_ivAXrb6Hmn-zL4Yh&vprv=1&svpuc=1&mime=audio%2Fwebm&ns=_zqKiZpNt-JoVfB6ZxpAEYgQ&gir=yes&clen=105817342&dur=6407.181&lmt=1713005919478659&mt=1715179022&fvip=5&keepalive=yes&c=WEB&sefc=1&txp=5532434&n=uqxS7_K0Dt28yQ&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cgcr%2Cbui%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AHWaYeowRgIhAJSQygTfY8ClwIaeIkM9amhGKAZ1Q--mCac2-PeXhgg6AiEAil_J8FLnZz4gvZ6HhU3gTCUcsEU0Wxbss-Uyn-mwxYU%3D&sig=AJfQdSswRQIhAOjXlaSGLwaIfGoQSnFuDF5Z8pRXKJahAUljh1omt2uyAiB-3R5Fyds0FLQ1Uq-TfKsRmNSexxqape6Awu6pJfO15w%3D%3D');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_NOPROGRESS, false);
curl_setopt($ch, CURLOPT_FILE, $targetFile);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest"));
curl_exec($ch);
fclose($ch);

?>
