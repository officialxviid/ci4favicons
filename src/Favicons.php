<?php

namespace OfficialXVIID\CI4Favicons;

use Imagine\Gd\Imagine as GdImagine;
use Imagine\Image\Box;
use Imagine\Image\Palette\RGB;
use Imagine\Image\Point;
use Imagine\Imagick\Imagine as ImagickImagine;
use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;
use OfficialXVIID\CI4Favicons\Interfaces\FaviconsInterface;

class BaseFavicons implements FaviconsInterface
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
     * Source path
     * 
     * @var string 
     */
    protected string $source_path;

    /**
     * All available sizes
     * 
     * Favicon Guide
     * @link https://en.wikipedia.org/wiki/Favicon#Image_file_format_support
     * 
     * Apple
     * @link https://developer.apple.com/design/human-interface-guidelines/app-icons
     * 
     * Microsoft
     * @link https://learn.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/samples/gg491740(v=vs.85)?redirectedfrom=MSDN
     */
    protected static array $sizes = [
        'favicon-16x16.png'            => 16,
        'favicon-32x32.png'            => 32,
        'favicon-96x96.png'            => 96,
        'android-chrome-36x36.png'     => 36,
        'android-chrome-48x48.png'     => 48,
        'android-chrome-72x72.png'     => 72,
        'android-chrome-96x96.png'     => 96,
        'android-chrome-144x144.png'   => 144,
        'android-chrome-192x192.png'   => 192,
        'mstile-70x70.png'             => 70,
        'mstile-144x144.png'           => 144,
        'mstile-150x150.png'           => 150,
        'mstile-310x310.png'           => 310,
        'mstile-310x150.png'           => [310, 150],
        'apple-touch-icon.png'         => 57,
        'apple-touch-icon-57x57.png'   => 57,
        'apple-touch-icon-60x60.png'   => 60,
        'apple-touch-icon-72x72.png'   => 72,
        'apple-touch-icon-76x76.png'   => 76,
        'apple-touch-icon-114x114.png' => 114,
        'apple-touch-icon-120x120.png' => 120,
        'apple-touch-icon-152x152.png' => 152,
        'apple-touch-icon-180x180.png' => 180,
    ];

    /**
     * Ms Tile Settings 
     */
    protected static $tileSettings = [
        'mstile-70x70.png'   => [
            'w'    => 126,
            'h'    => 126,
            'icon' => 100,
            'top'  => 13,
            'left' => 13,
        ],
        'mstile-150x150.png' => [
            'w'    => 270,
            'h'    => 270,
            'icon' => 124,
            'top'  => 73,
            'left' => 50,
        ],
        'mstile-310x310.png' => [
            'w'    => 558,
            'h'    => 558,
            'icon' => 260,
            'top'  => 149,
            'left' => 128,
        ],
        'mstile-310x150.png' => [
            'w'    => 558,
            'h'    => 270,
            'icon' => 130,
            'top'  => 214,
            'left' => 45,
        ],
    ];

    /** 
     * Input file
     * 
     * @var string 
     */
    private string $_input;

    /** 
     * Output folder
     * 
     * @var string 
     */
    private string $_output;

    /** 
     * App name
     * 
     * @var string 
     */
    private string $_appName;

    /** 
     * Imagine
     */
    private $_imagine;

    /** 
     * Use Ico 64
     * 
     * @var bool 
     */
    private bool $_ico_64 = false;

    /** 
     * Use Ico 48
     * 
     * @var bool 
     */
    protected bool $_ico_48 = false;

    /** 
     * No old apple
     * 
     * @var bool 
     */
    protected bool $_no_old_apple = true;

    /** 
     * No android
     * 
     * @var bool 
     */
    protected bool $_no_android = true;

    /** 
     * No ms
     * 
     * @var bool 
     */
    protected bool $_no_ms = true;

    /** 
     * Browser config file
     * 
     * @var string 
     */
    protected string $_browser_config_file = '';

    /** 
     * Tile color
     * 
     * @var string 
     */
    protected string $_tile_color = '';

    /** 
     * Message
     * 
     * @var string 
     */
    protected string $message = '';


    /** 
     * Constructor
     */
    public function __construct()
    {
        // Load Imagine
        $this->_imagine = $this->_loadImagine();
    }


    // ---------------------------------------------------
    // SETTER
    // ---------------------------------------------------


    /** 
     * Set input file
     */
    public function setInputFile(string $file)
    {
        $this->_input = $file;
    }

    /** 
     * Set output folder
     */
    public function setOutputFolder(string $folder)
    {
        $this->_output = $folder;
    }

    /** 
     * Set app name
     */
    public function setAppName(string $name)
    {
        $this->_appName = $name;
    }

    /** 
     * Set browser config file
     */
    public function setBrowserConfigFile(string $file)
    {
        $this->_browser_config_file = $file;
    }

    /** 
     * Set tile color
     */
    public function setTileColor(string $color)
    {
        $this->_tile_color = $color;
    }

    /** 
     * Use Ico 64
     */
    public function useIco64(bool $ico64 = true)
    {
        $this->_ico_64 = $ico64;
    }

    /** 
     * Use Ico 48
     */
    public function useIco48(bool $ico48 = true)
    {
        $this->_ico_48 = $ico48;
    }

    /** 
     * Use old apple
     */
    public function useOldApple(bool $oldApple = false)
    {
        if ($oldApple) {
            $this->_no_old_apple = false;
        } else {
            $this->_no_old_apple = true;
        }
    }

    /** 
     * Use Android
     */
    public function useAndroid(bool $android = false)
    {
        if ($android) {
            $this->_no_android = false;
        } else {
            $this->_no_android = true;
        }
    }

    /** 
     * Use Ms
     */
    public function useMs(bool $ms = false)
    {
        if ($ms) {
            $this->_no_ms = false;
        } else {
            $this->_no_ms = true;
        }
    }


    // ---------------------------------------------------
    // GETTER
    // ---------------------------------------------------

    /** 
     * Get browser config file
     */
    public function getBrowserConfigFile()
    {
        return $this->_browser_config_file;
    }

    /** 
     * Get tile color
     */
    public function getTileColor(string $color)
    {
        return $this->_tile_color;
    }

    /** 
     * Get Message 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Return sizes from options
     * 
     * @param bool $noOldApple exclude old Apple touch image sizes
     * @param bool $noAndroid exclude manifest.json file and images for Androids
     * @param bool $noMs exclude images for Windows and IE11 
     * @return array
     */
    public static function getSizes(): array
    {
        $result = array_merge(self::$sizes, array());
        if (self::$_no_old_apple) {
            unset($result['apple-touch-icon-57x57.png']);
            unset($result['apple-touch-icon-60x60.png']);
            unset($result['apple-touch-icon-72x72.png']);
            unset($result['apple-touch-icon-114x114.png']);
        }
        if (self::$_no_android) {
            unset($result['android-chrome-36x36.png']);
            unset($result['android-chrome-48x48.png']);
            unset($result['android-chrome-72x72.png']);
            unset($result['android-chrome-96x96.png']);
            unset($result['android-chrome-144x144.png']);
        }
        if (self::$_no_ms) {
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
        if (!isset(self::$tileSettings[$name])) {
            throw FaviconsException::forInvalidImageName();
        }
        return self::$tileSettings[$name];
    }


    // ---------------------------------------------------
    // Generator
    // ---------------------------------------------------

    /** 
     * Generate 
     */
    public function generate()
    {
        if (!$this->checkInputFile()) {
            return false;
        }

        if (!$this->checkOutputFolder()) {
            return false;
        }

        $this->generateICO();
        $this->generatePNGs();
        $this->generateManifestJson();
        return true;
    }

    /** 
     * Generate ICO 
     */
    protected function generateICO()
    {
        $bmpTemp = $this->source_path . "/../bin/" . $this::CI4FAVICONS_NAME . "-tmp-16.bmp";
        $filename = $this->_output . "favicon.ico";

        // Original Image
        $originalImage = $this->_imagine->open($this->_input)->strip();
        $originalImage
            ->copy()
            ->resize(new Box(16, 16))
            ->save($bmpTemp);

        // Icon
        $icon = $this->_imagine->open($bmpTemp);
        $icon
            ->layers()
            ->add($originalImage->copy()->resize(new Box(32, 32)));

        // ICO 48
        if ($this->_ico_48) {
            $icon
                ->layers()
                ->add($originalImage->copy()->resize(new Box(48, 48)));
        }

        // ICO 64
        if ($this->_ico_64) {
            $icon
                ->layers()
                ->add($originalImage->copy()->resize(new Box(64, 64)));
        }

        // Save
        $icon->save($filename, ['flatten' => false]);

        // Remove bmp temporary
        unlink($bmpTemp);

        return true;
    }

    /** 
     * Generate PNGs 
     */
    protected function generatePNGs()
    {
        $sizes = self::getSizes();
        $originalImage = $this->_imagine->open($this->_input)->strip();
        $pallete       = new RGB();
        $background    = $pallete->color('#000', 0);

        foreach ($sizes as $imageName => $size) {
            $imagePath = $this->_output . $imageName;
            if (substr($imageName, 0, 6) == 'mstile' && $size != 144) {
                $opt  = self::getTileSettings($imageName);
                $tile = $this->_imagine->create(new Box($opt['w'], $opt['h']), $background);
                $tile->paste(
                    $originalImage->copy()->resize(new Box($opt['icon'], $opt['icon'])),
                    new Point($opt['top'], $opt['left'])
                );
                $tile->save($imagePath);
            } else {
                $originalImage->copy()
                    ->resize(new Box($size, $size))
                    ->save($imagePath);
            }
        }
    }

    /** 
     * Generate Manifest Json 
     */
    protected function generateManifestJson()
    {
        $manifest = array(
            'name'  => $this->_appName,
            'icons' => array(),
        );
        foreach (array(36, 48, 72, 96, 144, 192) as $size) {
            $manifest['icons'][] = array(
                'src'     => "/android-chrome-{$size}x{$size}.png",
                'sizes'   => "{$size}x{$size}",
                'type'    => "image/png",
                'density' => round($size / 48.0, 2)
            );
        }
        $json         = json_encode($manifest, JSON_PRETTY_PRINT);
        $jsonFilePath = $this->_output . "manifest.json";
        file_put_contents($jsonFilePath, $json);
    }


    // ---------------------------------------------------
    // UTILITIES
    // ---------------------------------------------------


    /** 
     * Check Input File
     */
    protected function checkInputFile(): bool
    {
        if (!empty($this->_input)) {
            if (filter_var($this->_input, FILTER_VALIDATE_URL)) {
                $ch = curl_init($this->_input);
                curl_setopt($ch, CURLOPT_NOBODY, true);
                curl_exec($ch);
                $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($code == 200) {
                    return true;
                }
            } else {
                return true;
            }
        }

        $this->message = lang('Favicons.inputFileDoesNotExist');
        return false;
    }

    /** 
     * Check Output Folder
     */
    protected function checkOutputFolder(): bool
    {
        $path = realpath($this->_output);

        if ($path === false && !is_dir($path)) {
            $this->message = lang('Favicons.outputPathDoesNotExist');
            return false;
        }

        return true;
    }

    /** 
     * Detect imagine
     */
    private function _loadImagine()
    {
        // Use Imagick extension by default
        if (extension_loaded('imagick') && class_exists("Imagick")) {
            return new ImagickImagine();
        }

        // fall back to GD
        if (extension_loaded('gd') && function_exists('gd_info')) {
            return new GdImagine();
        }

        $this->message = lang('Favicons.failedToLoadImagine');
        throw FaviconsException::forFailedToLoadImagine();
        exit(1);
    }
}
