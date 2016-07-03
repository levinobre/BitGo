<?php
 $BitGoToken = 'TOKEN';
 $wallet = 'THE PRIMARY ADDRESS OF WALLET';
 $address = 'ADDRESS WHO WILL LABELED';
 $label = 'THE LABEL';
 exec('curl -X PUT -H "Content-Type: application/json" -H "Authorization: Bearer '.$BitGoToken.'" -d "{ \"label\": \"'.$label.'\" }" https://www.bitgo.com/api/v1/labels/'.$wallet.'/'.$address.'');
?>
