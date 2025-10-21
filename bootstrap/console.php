<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * This is a configuration file for lading FireHub Framework with Console kernel.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 8.4
 * @package App
 *
 * @version GIT: $Id$ Blob checksum.
 */

require 'phar://'.__DIR__.'/../vendor/firehub/core-standard/phar/core.min.phar/initializers/firehub.FireHubConfigurator.php';

use FireHub\Core\Initializers\FireHubConfigurator;

/**
 * ### Let there be light
 * @since 1.0.0
 *
 * @return \FireHub\Core\FireHub
 */
return new FireHubConfigurator(dirname(__DIR__))
    ->withBootloaders([
        //
    ])
    ->create();