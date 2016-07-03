<?php
 $address = 'ADDRESS';
 $address_transactions = json_decode(file_get_contents("https://www.bitgo.com/api/v1/address/$address/tx"));
 $address_transactions = $address_transactions->transactions;
?>
