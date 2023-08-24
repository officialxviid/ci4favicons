<?php

namespace OfficialXVIID\CI4Favicons;

use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;
use OfficialXVIID\CI4Favicons\Interfaces\FaviconsInterface;

class Favicons extends BaseFavicons implements FaviconsInterface
{
    /** 
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /** 
     * Set input file 
     */
    public function setInputFile(string $file)
    {
        $this->input = $file;
    }

    /** 
     * Set output folder
     */
    public function setOutputFolder(string $folder)
    {
        $this->output = $folder;
    }

    /** 
     * Get input file 
     */
    public function inputFile(): string
    {
        return $this->input;
    }

    /** 
     * Get output folder
     */
    public function outputFolder(): string
    {
        return $this->output;
    }

    /**
     * Return sizes from options
     * 
     * @param bool $noOldApple exclude old Apple touch image sizes
     * @param bool $noAndroid exclude manifest.json file and images for Androids
     * @param bool $noMs exclude images for Windows and IE11 
     * @return array
     */
    public static function getSizes($noOldApple = false, $noAndroid = false, $noMs = false): array
    {
        $result = array_merge(parent::$_sizes, array());
        if ($noOldApple) {
            unset($result['apple-touch-icon-57x57.png']);
            unset($result['apple-touch-icon-60x60.png']);
            unset($result['apple-touch-icon-72x72.png']);
            unset($result['apple-touch-icon-114x114.png']);
        }
        if ($noAndroid) {
            unset($result['android-chrome-36x36.png']);
            unset($result['android-chrome-48x48.png']);
            unset($result['android-chrome-72x72.png']);
            unset($result['android-chrome-96x96.png']);
            unset($result['android-chrome-144x144.png']);
        }
        if ($noMs) {
            unset($result['mstile-70x70.png']);
            unset($result['mstile-144x144.png']);
            unset($result['mstile-150x150.png']);
            unset($result['mstile-310x310.png']);
            unset($result['mstile-310x150.png']);
        }
        return $result;
    }

    /**
     * Get the settings for Windows tile image size
     * 
     * @param type $name
     * @return array
     * @throws \RuntimeException
     */
    public static function getTileSettings($name): array
    {
        if (!isset(parent::$_tileSettings[$name])) {
            throw FaviconsException::forInvalidImageName();
        }
        return parent::$_tileSettings[$name];
    }
}
