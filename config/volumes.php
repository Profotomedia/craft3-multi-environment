<?php
/**
 * $_ENV constants are loaded by craft3-multi-environment from .env.php via web/index.php
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com/
 * @package   craft3-multi-environment
 * @since     1.0.3
 * @license   MIT
 */

/**
 * Asset Volume Configuration
 *
 * All of your system's volume configuration settings go in here.
 * Put the Asset Volume handle in `ASSET_HANDLE` key, and put the path
 * to the asset in `ASSET_PATH`. Create an array for each Asset Volume
 * your website uses.
 */

return [

    // All environments
    '*' => [
        'ASSET_HANDLE' => [
            'url' => getenv('CRAFTENV_BASE_URL') . 'ASSET_PATH',
            'path' => getenv('CRAFTENV_BASE_PATH') . 'ASSET_PATH',
        ],
    ],

    // Live (production) environment
    'live'  => [
    ],

    // Staging (pre-production) environment
    'staging'  => [
    ],

    // Local (development) environment
    'local'  => [
    ],
];
