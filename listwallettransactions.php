<?php
 $BitGoToken = 'TOKEN';
 $wallet = 'THE PRIMARY ADDRESS OF WALLET';
 exec('curl -X GET -H "Content-Type: application/json" -H "Authorization: Bearer '.$BitGoToken.'" https://www.bitgo.com/api/v1/wallet/'.$wallet.'/tx', $transactions);
 $transactions = json_decode($transactions[0]);
 $transactions = $transactions->transactions;
?>
