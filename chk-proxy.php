<?php
function getProxy()
{
    $proxySocks = file("proxy.txt"); // Lê o arquivo com proxies
    $myproxy = rand(0, sizeof($proxySocks) - 1); // Escolhe um proxy aleatoriamente
    $proxySocks = trim($proxySocks[$myproxy]); // Remove espaços extras ou quebras de linha
    
    return $proxySocks;
}

function testProxy($proxy)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.google.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        curl_close($ch);
        return false;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode == 200;
}

$proxy = null;

while ($proxy === null) {
    $proxy = getProxy();

    if (testProxy($proxy)) {
        echo "Proxy LIVE: $proxy <br>";
    } else {
        echo "Proxy DIE: $proxy <br>";
        $proxy = null;
    }

}
?>
