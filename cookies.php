<?php


_d(rawurlencode( 'saldus braskinis su klevu sirupu' ));
// setcookie ( 'Mano-Pirmas-kukis' , 'saldus braskinis su klevu sirupu' , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool
setcookie ( 'Mano-Pirmas-kukis' , 'saldus braskinis su klevu sirupu', time() - 60);
// setcookie ( 'Mano-Antras-kukis' , 'saldus braskinis su klevu sirupu', time() + 60);
setcookie ( 'Mano-Antras-kukis' , 'saldus braskinis su klevu sirupu', time() + 80000, '/');

_d($_COOKIE);

?>