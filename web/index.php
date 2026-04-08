<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * This is the front controller for all HTTP requests to the application.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026 The FireHub Project - All rights reserved
 * @license https://opensource.org/licenses/MIT MIT License
 *
 * @php-version 8.5
 * @package App\Web
 */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$start_time = microtime(true);
// ----------------------------------------------------------------------------------

/** ### Bootstrap FireHub Framework */
//echo (require __DIR__.'/../bootstrap/app.php')->boot();
echo require '../../core-foundation/src/public/boot.php';
//require 'phar://../vendor/firehub/core-foundation/dist/core.phar';

/*use FireHub\Core\Support\DataStructure\ArrayCollection;

$array = []; for ($i=0; $i < 1_000_000; $i++) $array[] = $i;

$collection = new ArrayCollection($array);

$collection->map(function ($value) {});*/

// ----------------------------------------------------------------------------------
if (PHP_SAPI === 'cli') {
    echo "________________________________\n";
    echo "Time spent: \e[1;37;42m".((microtime(true) - $start_time) * 1_000)."\e[0m\n";
    echo "Peek: \e[1;37;41m".(number_format(memory_get_peak_usage()))."\e[0m\n";
} else {
    echo '<br><br>Time spent: <strong>'.(microtime(true) - $start_time) * 1_000 .'<br>';
    echo '<br>Peek: <strong>'.number_format(memory_get_peak_usage()).' bytes</strong> of memory.<br>';
}