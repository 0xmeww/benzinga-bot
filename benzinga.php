/// READ ME ///
// RUN YOUR XAMPP
// PLACE THIS SCRIPT INTO YOUR FOLDER PHP
// RUN THIS SCRIPT "php benzinga.php"
// INPUT YOUR REFF CODE
// TOTAL REFF YOU NEED IT. ( REMINDER : DON'T BE GREEDY!!! )
// CHECK YOUR ACCOUNT.
// DON'T GUARANTEE IF STILL WORKING OR NOT AFTER I UPDATE THIS SCRIPT.
// LEGIT ? IDK BRO, I JUST MADE THIS SCRIPT BY LUV.
// BUY ME SOME COFFEE https://saweria.co/khairulkrhacx


<?php
echo "[?]input refferal code\n";
$ref = trim(fgets(STDIN));

echo "[?]mau berapa banyak reff nya\n";
$jumlah = trim(fgets(STDIN));
for($a=0;$a<$jumlah;$a++) {

$acak = md5(rand(12345678,98765432));
$email = "trader.tersesat-$acak%40gmail.com";
$body = "email=$email&mu=$ref&no-bad-guys=mnp2BAQ9kct.dgz8qav&pid=MRZ3iwWJ8ESkuiTKTFFpPHs1rAd0Lulu4tLd";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.benzinga.com/zing');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$headers = array();
$headers[] = 'Host: www.benzinga.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
//$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
//$headers[] = 'Content-Length: .strlen';
$headers[] = 'Origin: https://www.benzinga.com';
$headers[] = 'Connection: close';
$headers[] = "Referer: https://www.benzinga.com/zing?mu=$ref";
$headers[] = 'Cookie: _ga=GA1.2.342141291.1635294696; _gid=GA1.2.1011217677.1641456795';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
print "$email => menjadi refferal kamu, silahkan di cek.\n";
curl_close($ch);
}


?>
