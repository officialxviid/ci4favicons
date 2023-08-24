<?php

namespace OfficialXVIID\CI4Favicons\Traits;

use CodeIgniter\CLI\CLI;
use OfficialXVIID\CI4Favicons\Favicons;

trait FaviconsCommandTrait
{
    /** 
     *  Show Banner
     */
    protected function showBanner()
    {
        CLI::clearScreen();
        $title1 = Favicons::CI4FAVICONS_LOGO;
        $title2 = Favicons::CI4FAVICONS_NAME . ' ' . 'v' . Favicons::CI4FAVICONS_VERSION;
        $title3 = 'powered by XVIID';

        $max = max(strlen($title1), strlen($title2), strlen($title3));

        $drawLines = '';
        for ($i = 0; $i < $max; $i++) {
            $drawLines .= '=';
        }

        CLI::write($drawLines, 'yellow');
        CLI::write($title1, 'light_yellow');
        CLI::write($title2, 'light_yellow');
        CLI::write($title3, 'light_yellow');
        CLI::write($drawLines, 'yellow');
    }
}
