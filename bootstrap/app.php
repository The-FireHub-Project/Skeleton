<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * This is a configuration file for lading FireHub Framework with HTTP kernel.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026 The FireHub Project - All rights reserved
 * @license https://opensource.org/licenses/MIT MIT License
 *
 * @php-version 8.4
 * @package App\Bootstrap
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace App\Bootstrap;

use FireHub\Core\Support\Bootstrap\FireHubConfigurator;

/**
 * ### Let there be light
 * @since 1.0.0
 *
 * @throws \FireHub\Core\Throwable\Exception\Bootstrap\FailedToLoadBootloaderException If a bootloader fails to
 * load.
 * @throws \FireHub\Core\Throwable\Exception\Bootstrap\NotBootloaderException If a bootloader is not a bootloader.
 *
 * @return \FireHub\Core\FireHub
 */
return new FireHubConfigurator()
    ->withBootloaders([
        //
    ])
    ->create();