<?php

namespace OfficialXVIID\CI4Favicons\Interfaces;

use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;

interface FaviconsInterface
{
    /** 
     * Input File 
     */
    public function inputFile(): string;

    /** 
     * Output Folder
     */
    public function outputFolder(): string;

    /**
     * Return sizes from options
     * 
     * @param bool $noOldApple exclude old Apple touch image sizes
     * @param bool $noAndroid exclude manifest.json file and images for Androids
     * @param bool $noMs exclude images for Windows and IE11 
     * 
     * @return array
     */
    public static function getSizes($noOldApple = false, $noAndroid = false, $noMs = false): array;

    /**
     * Get the settings for Windows tile image size
     * 
     * @param type $name
     * 
     * @return array
     * 
     * @throws FaviconsException
     */
    public static function getTileSettings($name): array;

    /** 
     * Enable for generate ico 64 
     */
    public function use64Icon();

    /** 
     * Enable for generate ico 48 
     */
    public function use48Icon();

    /** 
     * Disable for generate all old apple icon
     */
    public function noOldApple();

    /** 
     * Disable for generate android icon
     */
    public function noAndroid();

    /** 
     * Disable for generate Ms icon
     */
    public function noMs();

    /** 
     * Generate Favicon 
     */
    public function generate();
}
