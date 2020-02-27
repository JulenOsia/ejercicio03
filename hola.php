<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
echo "hola";

$fecha = Carbon::now();

echo $fecha->format('es');
