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

    /** 
     * Browser config
     * 
     * @var string 
     */
    public string $browser_config_file = "";

    /** 
     * Tile color
     * 
     * Example for white
     * - fff
     * - ffffff
     * 
     * @var string 
     */
    public string $tileColor = "ffffff";

    /** 
     * Auto generate html tags
     * 
     * @var bool 
     */
    public bool $autoGenerateHTMLTags = true;
}
