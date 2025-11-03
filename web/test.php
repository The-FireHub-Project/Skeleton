<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * This is the main app landing file for all HTTP requests.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package App\Web
 *
 * @version GIT: $Id$ Blob checksum.
 */

//header('Content-type: text/html; charset=windows-1250');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(\E_ALL);
$start_time = microtime(true);
// ----------------------------------------------------------------------------------

/** ### Register the Composer autoloader */
require __DIR__.'/../vendor/autoload.php';

/** ### Bootstrap FireHub Framework */
echo (require __DIR__.'/../bootstrap/app.php')->boot();

use FireHub\Core\Support\LowLevel\Regex;

var_dump(sys_get_temp_dir());

//xdebug_info();
//phpinfo();

// ----------------------------------------------------------------------------------
if (PHP_SAPI === 'cli') {
    echo "________________________________\n";
    echo "Time spent: \e[1;37;42m".((microtime(true) - $start_time) * 1_000)."\e[0m\n";
    echo "Peek: \e[1;37;41m".(number_format(memory_get_peak_usage()))."\e[0m\n";
} else {
    echo '<br><br>Time spent: <strong>'.(microtime(true) - $start_time) * 1_000 .'<br>';
    echo '<br>Peek: <strong>'.number_format(memory_get_peak_usage()).' bytes</strong> of memory.<br>';
}