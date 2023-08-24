<?php

namespace OfficialXVIID\CI4Favicons;

use Imagine\Gd\Imagine as GdImagine;
use Imagine\Imagick\Imagine as ImagickImagine;
use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;
use OfficialXVIID\CI4Favicons\Interfaces\FaviconsInterface;

abstract class BaseFavicons implements FaviconsInterface
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
