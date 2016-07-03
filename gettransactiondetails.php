<?php
 $TX = 'TRANSACTION ID (TX)';
 $TX_info = json_decode(file_get_contents("https://www.bitgo.com/api/v1/tx/$TX"));
?>
