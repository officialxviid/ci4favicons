<?php

namespace OfficialXVIID\CI4Favicons;

use Imagine\Gd\Imagine as GdImagine;
use Imagine\Imagick\Imagine as ImagickImagine;
use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;

abstract class BaseFavicons
{
    /**
     * The current version of CI4Favicons
     */
    public const CI4FAVICONS_VERSION = '1.0.0';

    /**
     * CI4Favicons Logo
     */
    public const CI4FAVICONS_LOGO = '◠ᴥ◠';

    /**
     * CI4Favicons Name
     */
    public const CI4FAVICONS_NAME = 'CI4Favicons';

    /**
     * All available sizes
     * 
     * Favicon Guide
     * @link https://en.wikipedia.org/wiki/Favicon#Image_file_format_support
     * 
     * Apple
     * @link https://developer.apple.com/design/human-interface-guidelines/app-icons
     * 
     * Microsoft
     * @link https://learn.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/samples/gg491740(v=vs.85)?redirectedfrom=MSDN
     */
    private static array $_sizes = [
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
        'mstile-310x150.png'           => [310, 150],
        'apple-touch-icon.png'         => 57,
        'apple-touch-icon-57x57.png'   => 57,
        'apple-touch-icon-60x60.png'   => 60,
        'apple-touch-icon-72x72.png'   => 72,
        'apple-touch-icon-76x76.png'   => 76,
        'apple-touch-icon-114x114.png' => 114,
        'apple-touch-icon-120x120.png' => 120,
        'apple-touch-icon-152x152.png' => 152,
        'apple-touch-icon-180x180.png' => 180,
    ];

    /**
     * Ms Tile Settings 
     */
    private static $_tileSettings = [
        'mstile-70x70.png'   => [
            'w'    => 126,
            'h'    => 126,
            'icon' => 100,
            'top'  => 13,
            'left' => 13,
        ],
        'mstile-150x150.png' => [
            'w'    => 270,
            'h'    => 270,
            'icon' => 124,
            'top'  => 73,
            'left' => 50,
        ],
        'mstile-310x310.png' => [
            'w'    => 558,
            'h'    => 558,
            'icon' => 260,
            'top'  => 149,
            'left' => 128,
        ],
        'mstile-310x150.png' => [
            'w'    => 558,
            'h'    => 270,
            'icon' => 130,
            'top'  => 214,
            'left' => 45,
        ],
    ];

    /** 
     * Input file
     * 
     * @var string 
     */
    protected string $input;

    /** 
     * Output folder
     * 
     * @var string 
     */
    protected string $output;

    /** 
     * Imagine
     */
    protected $imagine;


    /** 
     * Constructor
     */
    public function __construct()
    {
        $this->imagine = $this->_getImagine();
    }


    /** 
     * Detect imagine
     */
    private function _getImagine()
    {
        // Use Imagick extension by default
        if (extension_loaded('imagick') && class_exists("Imagick")) {
            return new ImagickImagine();
        }

        // fall back to GD
        if (extension_loaded('gd') && function_exists('gd_info')) {
            return new GdImagine();
        }

        throw FaviconsException::forFailedToLoadImagine();
        exit(1);
    }


    /** 
     * Set input file
     */
    abstract public function setInputFile(string $file);

    /** 
     * Set output folder
     */
    abstract public function setOutputFolder(string $folder);
}
