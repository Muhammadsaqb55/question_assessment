<?php 
return [ 
    'client_id' => 'Ad0x7-TsmTx7OTposBQbvuJVK0l_x9rbXbUoYGECvhPKLKwIBHEJtoT5mLQb_hI9hHOnhTVBG4mfMHRu',
	'secret' => 'ENII5k0AqXinuDPgTYn5VwoQlQ1tFo-7P_FrggH8P7Gn_Z0x6VBUk3KYn-FjdgZ615bJOtWL0fgw1TgB',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];