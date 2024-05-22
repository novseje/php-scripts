<?php 

echo getSymbolByQuantity(disk_free_space("/")) .'/'. getSymbolByQuantity(disk_total_space('/'));
	
function getSymbolByQuantity($bytes) {
    $symbols = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
    $exp = floor(log($bytes)/log(1024));
    return sprintf('%.2f '.$symbols[$exp], ($bytes/pow(1024, floor($exp))));
}