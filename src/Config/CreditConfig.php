<?php

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

namespace OfficialXVIID\CI4Favicon\Config;

use CodeIgniter\CLI\CLI;

class CreditConfig {
    /** 
     * Name
     * -----------------
     * 
     * @var string 
     */
    private $__name = 'CI4Favicon';
    
    /** 
     * Asci Logo
     * -----------------
     * 
     * @var string 
     */
    private $__asciLogo = '◠ᴥ◠   CI4Favicon';
    
    /** 
     * Version
     * -----------------
     * 
     * @var string 
     */
    private $__version = '1.0';
    
    /** 
     * URL
     * -----------------
     * 
     * @var string 
     */
    private $__url = 'https://github.com/officialxviid/ci4favicon';

    /** 
     * License
     * -----------------
     * 
     * @var array 
     */
    private $__license = [
        'name'      => 'XVIID Product Public License',
        'url'       => 'https://license.xviid.net/detail/XPPL'
    ];

    /** 
     * Developer
     * -----------------
     * 
     * @var string 
     */
    private $__developer = [
        'name'      => 'XVIID Devloper',
        'email'     => 'developer@xviid.net',
        'url'       => 'https://xviid.net',
    ];

    /** 
     * Color 1 Light
     * -----------------
     * 
     * @var array 
     */
    private $__color1LG = [
        'name'  => 'Color 1 LG',
        'hex'   => 'FF7A43',
        'rgb'   => [255, 122, 67],
        'cmyk'  => [0, 65, 78, 0],
    ];

    /** 
     * Color 1 Primary
     * -----------------
     * 
     * @var array 
     */
    private $__color1PK = [
        'name'  => 'Color 1 PK',
        'hex'   => 'DD4814',
        'rgb'   => [221, 72, 20],
        'cmyk'  => [8, 86, 100, 1],
    ];

    /** 
     * Color 1 Dark
     * -----------------
     * 
     * @var array 
     */
    private $__color1DK = [
        'name'  => 'Color 1 DK',
        'hex'   => 'A40800',
        'rgb'   => [164, 8, 0],
        'cmyk'  => [23, 100, 100, 20],
    ];

    /** 
     * Color 2 Light
     * -----------------
     * 
     * @var array 
     */
    private $__color2LG = [
        'name'  => 'Color 2 LG',
        'hex'   => 'FF5F35',
        'rgb'   => [255, 95, 53],
        'cmyk'  => [0, 78, 83, 0],
    ];

    /** 
     * Color 2 Primary
     * -----------------
     * 
     * @var array 
     */
    private $__color2PK = [
        'name'  => 'Color 2 PK',
        'hex'   => 'EC1D00',
        'rgb'   => [236, 29, 0],
        'cmyk'  => [1, 99, 100, 1],
    ];

    /** 
     * Color 2 Dark
     * -----------------
     * 
     * @var array 
     */
    private $__color2DK = [
        'name'  => 'Color 2 DK',
        'hex'   => 'B10000',
        'rgb'   => [177, 0, 0],
        'cmyk'  => [20, 100, 100, 14],
    ];

    /** 
     * Get Name 
     * -----------------
     * 
     * @return string
     */
    public function get_name(){ return $this->__name; }

    /** 
     * Get ASCI Logo 
     * -----------------
     * 
     * @return string
     */
    public function get_asciLogo(){ return $this->__asciLogo; }

    /** 
     * Get Version 
     * -----------------
     * 
     * @return string
     */
    public function get_version(){ return $this->__version; }

    /** 
     * Get URL 
     * -----------------
     * 
     * @return string
     */
    public function get_url(){ return $this->__url; }

    /** 
     * Get License 
     * -----------------
     * 
     * @return array ['name','url']
     */
    public function get_license(){ return $this->__license; }

    /** 
     * Get Developer 
     * -----------------
     * 
     * @return array ['name','email','url']
     */
    public function get_developer(){ return $this->__developer; }

    /** 
     * Get Color 1 LG 
     * -----------------
     * 
     * @return array ['name','hex','rgb','cmyk']
     */
    public function get_color1LG(){ return $this->__color1LG; }

    /** 
     * Get Color 1 PK 
     * -----------------
     * 
     * @return array ['name','hex','rgb','cmyk']
     */
    public function get_color1PK(){ return $this->__color1PK; }

    /** 
     * Get Color 1 DK 
     * -----------------
     * 
     * @return array ['name','hex','rgb','cmyk']
     */
    public function get_color1DK(){ return $this->__color1DK; }

    /** 
     * Set CLI Header 
     * -----------------
     */
    private function __setCLIHeader()
    {
        CLI::write('=================', 'yellow');

        if($this->__asciLogo){ CLI::write((string) $this->__asciLogo, 'yellow'); }
        else{ CLI::write((string) $this->__name, 'yellow'); };

        if($this->__version) CLI::write((string) 'v.' . $this->__version, 'yellow');
        
        CLI::write('=================', 'yellow');
        CLI::newLine();
    }

    /** 
     * Set CLI Info Header 
     * -----------------
     */
    private function __setCLIInfoHeader()
    {
        CLI::write(lang('CI4Favicon.creditPackageName') . ':', 'dark_gray');
        CLI::write((string)$this->__name, 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditPackageVersion') . ':', 'dark_gray');
        CLI::write((string)$this->__version, 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditPackageURL') . ':', 'dark_gray');
        CLI::write((string)$this->__url, 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditLicenseName') . ':', 'dark_gray');
        CLI::write((string)$this->__license['name'], 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditLicenseURL') . ':', 'dark_gray');
        CLI::write((string)$this->__license['url'], 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditDeveloperName') . ':', 'dark_gray');
        CLI::write((string)$this->__developer['name'], 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditDeveloperEmail') . ':', 'dark_gray');
        CLI::write((string)$this->__developer['email'], 'white');
        CLI::newLine();

        CLI::write(lang('CI4Favicon.creditDeveloperURL') . ':', 'dark_gray');
        CLI::write((string)$this->__developer['url'], 'white');
        CLI::newLine();
    }


    /** 
     * Get CLI Header
     * -----------------
     * 
     * @return void
     */
    public function getCLIHeader()
    {
        return $this->__setCLIHeader();
    }

    /** 
     * Get CLI Info Credit
     * -----------------
     * 
     * @return void
     */
    public function getCLIInfoCredit()
    {
        return $this->__setCLIInfoHeader();
    }
}
