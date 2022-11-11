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

use App\Config\CI4Favicon;

if (!function_exists('CI4Favicon_html')) {
    /**
     * Helper function to write <code>link</code> and <code>meta</code> tags for favicons
     * 
     * @param int $option decide which type of favicon will be included in the final result. Default will be <code>FAVICON_ENABLE_ALL</code> to include any thing. The old apple touch link tags will be exclude with <code>FAVICON_NO_OLD_APPLE</code> bit, the android <code>manifest.json</code> link tag will be exclude with <code>FAVICON_NO_ANDROID</code> bit and the Microsoft Windows and IE msapplication meta tags will be excluded with <code>FAVICON_NO_MS</code> bit.
     * @param array $msOptions more information for Windows and IE msapplication meta tags. The input array can have these field:
     * <ul>
     *   <li><code>tile_color</code>: the background of live tile when this site is pinned, default is white (#ffffff)</li>
     *   <li><code>browser_config_file</code>: the path to browser config XML file if you have it. By default, it is set to an empty string to prevent IE from auto looking <code>browserconfig.xml</code> file</li>
     *   <li><code>application_name</code>: the default application name displayed when user pinned this site</li>
     * </ul>
     * 
     * @return string the output HTML
     */
    function CI4Favicon_html(){
        $config = new CI4Favicon();

        $noOldApple         = $config->noOldApple !== false ? $config->noOldApple : false;
        $noAndroid          = $config->noAndroid !== false ? $config->noAndroid : false;
        $noMs               = $config->noMs !== false ? $config->noMs : false;
        $tileColor          = $config->tileColor && (strlen($config->tileColor) == 3 || strlen($config->tileColor) == 6) ? $config->tileColor : 'EC1D00';
        $appName            = $config->appName ? $config->appName : '';
        $browserConfigFile  = $config->browserConfigFile && file_exists($config->browserConfigFile . $config->browserConfigFile) ? $config->browserConfigFile : '';

        return OfficialXVIID\CI4Favicon\Templates\Html::output($noOldApple, $noAndroid, $noMs, $tileColor, $browserConfigFile, $appName);
    }
}
