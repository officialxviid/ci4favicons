<@php

/**
 * 🆇🆅🅸🅸🅳 🅲🆁🅴🅳🅸🆃🆂 
 *
 * This file is part of CI4Favicon.
 *
 * @copyright (c) XVIID <https://xviid.net>
 * @version 1.0
 * @package CI4Favicon
 * @author XVIID Developer <developer@xviid.net>
 * @since 2022-10-31 11:12:18
 */

namespace Config;

use OfficialXVIID\CI4Favicon\Config\CI4FaviconConfig;

class CI4Favicon extends CI4FaviconConfig
{
    /** 
     * @var string $appName
     */
    public $appName = 'CI4Favicon App';

    /** 
     * input path is in ROOTPATH (your project folder)
     * Ex: writable/dist/favicon
     * 
     * @var string $inputPath
     */
    public $inputPath = 'writable/dist/favicon';

    /** 
     * @var string $inputFilename
     */
    public $inputFilename = 'my-logo.png';

    /** 
     * favicon output is in FCPATH (public folder)
     * Ex: assets/favicon/
     * 
     * @var string $outputPath
     */
    public $outputPath = 'assets/favicon/';
 
    /** 
     * @var string $tileColor
     */
    public $tileColor = '#EC1D00'; // CI4Favicon Color 2 PK

    /** 
     * Include all available options
     *
     * @var bool $enableAll
    */
    public $enableAll = false;

    /** 
     * The path of your browser configuration file
     * must be located in the public folder
     * 
     * Example <meta name="msapplication-config" content="http://localhost/IEConfig.xml" />
     * $browserConfigFile = 'IEConfig.xml';
     * 
     * Example <meta name="msapplication-config" content="http://localhost/assets/favicon/IEConfig.xml" />
     * $browserConfigFile = 'assets/favicon/IEConfig.xml';
     * 
     * @var string $browserConfigFile
     */
    public $browserConfigFile = '';

    /** 
     * @var bool $noOldApple
     */
    public $noOldApple = false;

    /** 
     * @var bool $noAndroid
     */
    public $noAndroid = false;

    /** 
     * @var bool $noMs
     */
    public $noMs = false;

    /**
     * All available sizes
     *
     * @var array 
     */
    public static $sizes = array(
        'favicon-16x16.png'            => 16,
        'favicon-32x32.png'            => 32,
        'favicon-96x96.png'            => 96,
        'android-chrome-36x36.png'     => 36,
        'android-chrome-48x48.png'     => 48,
        'android-chrome-72x72.png'     => 72,
        'android-chrome-96x96.png'     => 96,
        'android-chrome-144x144.png'   => 144,
        'android-chrome-192x192.png'   => 192,
        'mstile-70x70.png'             => 70,
        'mstile-144x144.png'           => 144,
        'mstile-150x150.png'           => 150,
        'mstile-310x310.png'           => 310,
        'mstile-310x150.png'           => array(310, 150),
        'apple-touch-icon.png'         => 57,
        'apple-touch-icon-57x57.png'   => 57,
        'apple-touch-icon-60x60.png'   => 60,
        'apple-touch-icon-72x72.png'   => 72,
        'apple-touch-icon-76x76.png'   => 76,
        'apple-touch-icon-114x114.png' => 114,
        'apple-touch-icon-120x120.png' => 120,
        'apple-touch-icon-152x152.png' => 152,
        'apple-touch-icon-180x180.png' => 180,
    );

    /** 
     * Tile Setting
     * 
     * @var array 
     */
    public static $tileSettings = array(
        'mstile-70x70.png'   => array(
            'w'    => 126,
            'h'    => 126,
            'icon' => 100,
            'top'  => 13,
            'left' => 13,
        ),
        'mstile-150x150.png' => array(
            'w'    => 270,
            'h'    => 270,
            'icon' => 124,
            'top'  => 73,
            'left' => 50,
        ),
        'mstile-310x310.png' => array(
            'w'    => 558,
            'h'    => 558,
            'icon' => 260,
            'top'  => 149,
            'left' => 128,
        ),
        'mstile-310x150.png' => array(
            'w'    => 558,
            'h'    => 270,
            'icon' => 130,
            'top'  => 214,
            'left' => 45,
        ),
    );
}
