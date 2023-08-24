<?php

namespace OfficialXVIID\CI4Favicons\Config;

use CodeIgniter\Config\BaseConfig;

class Favicons extends BaseConfig
{
    /** 
     * Input file
     * 
     * @var string 
     */
    public string $inputFile = __DIR__ . "/../../assets/logo.png";

    /** 
     * Output folder
     * 
     * @var string 
     */
    public string $outputFolder = FCPATH;

    /** 
     * App name
     * 
     * @var string 
     */
    public string $appName = "CI4Favicons";
}
