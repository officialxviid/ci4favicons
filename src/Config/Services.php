<?php

namespace OfficialXVIID\CI4Favicons\Config;

use Config\Services as BaseServices;
use OfficialXVIID\CI4Favicons\Config\Favicons as FaviconsConfig;
use OfficialXVIID\CI4Favicons\Favicons;

class Services extends BaseServices
{
    public static function ci4favicons(?FaviconsConfig $config = null, bool $getShared = true): Favicons
    {
        if ($getShared) {
            return static::getSharedInstance('ci4favicons', $config);
        }

        // If no config was injected then load one
        if (empty($config)) {
            $config = config('Favicons');
        }

        return new Favicons($config);
    }
}
