<?php
$data = "3287OpmIOPQYGeKqykWP1234";
$signatureSecretKey = "498fd04868363f0a0c2818ab419b2478";
$hash = hash_hmac('sha1', $data, $signatureSecretKey, false );
echo $hash;
?>