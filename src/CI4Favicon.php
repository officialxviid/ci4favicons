<?php

/**
 * 🆇🆅🅸🅸🅳 🅲🆁🅴🅳🅸🆃🆂 
 *
 * This file is part of CI4Favicon.
 *
 * @copyright (c) XVIID <https://xviid.net>
 * @version 1.0
 * @package CI4Favicon
 * @author Dyon <dyon@xviid.net>
 * @since 2022-10-31 11:12:18
 */

namespace OfficialXVIID\CI4Favicon;

use OfficialXVIID\CI4Favicon\Traits\GenerateTrait;

class CI4Favicon {
    /**
     * @uses GenerateTrait
     */
    use GenerateTrait;

    /**
     * Allowed generate types
     *
     * @var array
     */
    private $__allowGenerateType = ['html'];

    /** 
     * --------------------------------------------------------------------------
     * Output
     * -------------------------------------------------------------------------- 
     * 
     * @param string $output html
     * 
     * @return string html tags
     */
    public function output(string $output = '', array $options = [], $type = 'html')
    {
        if (in_array($type, $this->__allowGenerateType)) {
            if ($type = 'html') {
                $this->__generateToHTML($output, $options);
            }
        }
    }

    /** 
     * -------------------------------------------------------------------------- 
     * HTML Template 
     * -------------------------------------------------------------------------- 
     */
    private function __generateToHTML(string $output = '', array $options = [])
    {
        $result = array();

        // Is an Microsoft Application - Browser Config
        if (isset($options['noMs']) && !$options['noMs']) {
            // There is a Browser Config
            if (isset($options['browserConfigFile']) && $options['browserConfigFile']) {
                $result[] = '<meta name="msapplication-config" content="' . base_url($output . $options['browserConfigFile']) . '" />';
            }
            // No Browser Config
            else{
                $result[] = '<meta name="msapplication-config" content="none" />';
            }
        }

        // Is an Old Apple Icon
        if (isset($options['noOldApple']) && !$options['noOldApple']) {
            $result[] = '<link rel="apple-touch-icon" sizes="57x57" href="' . base_url($output . 'apple-touch-icon-57x57.png') . '" />';
            $result[] = '<link rel="apple-touch-icon" sizes="60x60" href="' . base_url($output . 'apple-touch-icon-60x60.png') . '" />';
            $result[] = '<link rel="apple-touch-icon" sizes="72x72" href="' . base_url($output . 'apple-touch-icon-72x72.png') . '" />';
            $result[] = '<link rel="apple-touch-icon" sizes="114x114" href="' . base_url($output . 'apple-touch-icon-114x114.png') . '" />';
        }

        // Favicon Apple Default
        $result[] = '<link rel="apple-touch-icon" sizes="76x76" href="' . base_url($output . 'apple-touch-icon-76x76.png') . '" />';
        $result[] = '<link rel="apple-touch-icon" sizes="120x120" href="' . base_url($output . 'apple-touch-icon-120x120.png') . '" />';
        $result[] = '<link rel="apple-touch-icon" sizes="152x152" href="' . base_url($output . 'apple-touch-icon-152x152.png') . '" />';
        $result[] = '<link rel="apple-touch-icon" sizes="180x180" href="' . base_url($output . 'apple-touch-icon-180x180.png') . '" />';

        // Favicon Meta Default
        $result[] = '<link rel="icon" type="image/png" sizes="32x32" href="' . base_url($output . 'favicon-32x32.png') . '" />';
        $result[] = '<link rel="icon" type="image/png" sizes="192x192" href="' . base_url($output . 'android-chrome-192x192.png') . '" />';
        $result[] = '<link rel="icon" type="image/png" sizes="16x16" href="' . base_url($output . 'favicon-16x16.png') . '" />';

        // Is an Android Icon
        if (isset($options['noAndroid']) && !$options['noAndroid']) {
            $result[] = '<link rel="manifest" href="' . base_url($output . 'manifest.json') . '" />';
        }

        // Is an Microsoft Application
        if (isset($options['noMs']) && !$options['noMs']) {
            // Is an Microsoft Application - App Name
            if (isset($options['appName']) && $options['appName']) {
                $result[] = '<meta name="application-name" content="' . $options['appName'] . '" />';
            }

            // Is an Microsoft Application - Tile Color
            if (isset($options['tileColor']) && $options['tileColor']) {
                $result[] = '<meta name="msapplication-TileColor" content="' . $options['tileColor'] . '" />';
            }

            // Is an Microsoft Application - Image/Icon
            $result[] = '<meta name="msapplication-TileImage" content="' . base_url($output . 'mstile-144x144.png') . '" />';
            $result[] = '<meta name="msapplication-square70x70logo" content="' . base_url($output . 'mstile-70x70.png') . '" />';
            $result[] = '<meta name="msapplication-square150x150logo" content="' . base_url($output . 'mstile-150x150.png') . '" />';
            $result[] = '<meta name="msapplication-wide310x150logo" content="' . base_url($output . 'mstile-310x150.png') . '" />';
            $result[] = '<meta name="msapplication-square310x310logo" content="' . base_url($output . 'mstile-310x310.png') . '" />';
        }

        // Return $result
        return implode("\n", $result);
    }
}
