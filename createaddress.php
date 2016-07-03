<?php
 $BitGoToken = 'TOKEN';
 $wallet = 'THE PRIMARY ADDRESS OF WALLET';
 exec('curl -X POST -H "Authorization: Bearer '.$BitGoToken.'" https://www.bitgo.com/api/v1/wallet/'.$wallet.'/address/0', $address);
 $address = json_decode($address[0]);
 $address = $address->{'address'};
?>
