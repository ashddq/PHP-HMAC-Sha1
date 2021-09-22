<?php
$data = "ClientId+sharedkey+Systrace"; //ClientId, SharedKey, systrace
$signatureSecretKey = "ClientSecret"; //ClientSecret
$hash = hash_hmac('sha1', $data, $signatureSecretKey, false );
echo $hash;
?>
