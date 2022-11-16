![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/f1db086732f08de88d73a7a45299fe7addc0d308cb98d867.png)

![](https://img.shields.io/badge/status-coming%20soon-orange) ![](https://img.shields.io/badge/type-plugins-ff69b4) [![](https://img.shields.io/badge/license-MIT-blue)](https://github.com/officialxviid/ci4favicon/blob/main/LICENSE)   
[![Facebook](https://img.shields.io/static/v1?label=Facebook&message=share&style=social&logo=facebook)](https://www.facebook.com/share.php?u=https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon&utm_medium=btn&utm_content=blog) [![Twitter](https://img.shields.io/static/v1?label=Twitter&message=share&style=social&logo=twitter)](https://twitter.com/intent/tweet?text=CI4Favicon&url=https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon) [![WhatsApp](https://img.shields.io/static/v1?label=WhatsApp&message=share&style=social&logo=whatsapp)](https://api.whatsapp.com/send/?text=CI4Favicon+https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon&type=custom_url&app_absent=0)

## Get Started

### 👁️ Overview

Auto generate favicons and HTML tags from a original PNG file.

Inspired by [`letrunghieu/favicon`](https://github.com/letrunghieu/favicon), this plugin will help you (_**CodeIgniter developer**_) to display the correct favicon for your website with just one original PNG image.

In more details, it supports:

*   Create **one** ICO file and **many** PNG files with many favicon sizes from just **one** original PNG image as well as a `manifest.json` file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.
*   Generate suitable `meta` and `link` tags for desktop web browsers as well as mobile touch devices to properly display favicon.

### 🧠 Basic Commands

*   **ci4favicon:publish** to start and copy the CI4Favicon Config file to your application.
*   **ci4favicon:generate** to generate favicon
*   **ci4favicon:help** to show help
*   **ci4favicon:credit** to display credit information

### 📂 Basic Constants

*   **ROOTPATH** is `your_project/`
*   **FCPATH** is `your_project/public/`
*   **APP\_NAMESPACE** is `your_project/app/`
*   **COMPOSER\_PATH** is `your_project/vendor/autoload.php`
*   **\_\_DIR\_\_** is a "magic constant" in PHP 5.3 or above which always refers to the current directory of the file from which it is called.
*   **\_\_FILE\_\_** is simply the name of the current file.

---

## How To Use

### ✨ Preparation

Prepare your PNG file with high quality. 

> I recommend the PNG file is a box with a minimum size of 512 x 512 px.

### ⚙️ Installation

We need [PHP imagick extension](http://php.net/manual/en/book.imagick.php) or [PHP GD extension](http://php.net/manual/en/book.image.php) for generating images. By default, the Imagick extension is loaded, if you cannot install it, you can switch to using GD ~via command line option~ if available.

#### Installation Using Composer

Installation is best done via Composer. Assuming Composer is installed globally, you may use the following command:

```plaintext
composer require officialxviid/ci4favicon
```

This will add the latest stable release of **OfficialXVIID:CI4Favicon** as a module to your project.

#### Manual Installation

Should you choose not to use Composer to install, you can clone or download this repo and then enable it by editing **app/Config/Autoload.php** and adding the `OfficialXVIID\CI4Favicon` namespace to the `$psr4` array. For example, if you copied it into **app/ThirdParty/**:

```php
$psr4 = [
    'Config'                      => APPPATH . 'Config',
    APP_NAMESPACE                 => APPPATH,
    'App'                         => APPPATH,
    'OfficialXVIID\CI4Favicon'    => APPPATH . 'ThirdParty/ci4favicon-1.0/src',
];
```

### 🚀 Publishing

To start CI4Favicon, run the command:

```plaintext
php spark ci4favicon:publish
```

This will generate **App\\Config\\CI4Favicon.php**

### 🔧 Configuration

Configure your **App\\Config\\CI4Favicon.php** to your liking.

<table><tbody><tr><td><strong>Property</strong></td><td><strong>Type</strong></td><td><strong>Description</strong></td><td><strong>Default</strong></td><td><strong>Example</strong></td></tr><tr><td>$appName</td><td>string</td><td>Set the application name in the <code>manifest.json</code> file. Default is an empty string.</td><td>""</td><td>“My Awesome App”</td></tr><tr><td>$input</td><td>string</td><td>The PNG file that you prepared earlier. The start of this path is ROOTPATH.</td><td>“logo.png”</td><td>"writable/dist/favicon/my-logo.png"</td></tr><tr><td>$output</td><td>string</td><td>Your favicon output path. Navigate this path to your FCPATH or public path. If you do not fill in this field, by default it will point to FCPATH or public folder.</td><td>“”</td><td>“assets/favicons/”</td></tr><tr><td>$tileColor</td><td>string</td><td>The background of live tile when this site is pinned. Fill in a HEX color for your <a href="https://learn.microsoft.com/en-us/windows-hardware/customize/desktop/unattend/microsoft-windows-helpandsupport-helpandsupport-tilecolor">Tile Color</a>.</td><td>“”</td><td>“EC1D00”</td></tr><tr><td>$browserConfigFile</td><td>string</td><td>The path to browser config XML file if you have it. By default, it is set to an empty string to prevent IE from auto looking <code>browserconfig.xml</code> file. If you have a browser configuration, put the file in the public folder.</td><td>“”</td><td>“IEConfig.xml”</td></tr><tr><td>$useIcon64</td><td>bool</td><td>Include the 64x64 image inside the output ICO file (which contains only 16x16 and 32x32 images by default)</td><td>true</td><td>true</td></tr><tr><td>$useIcon48</td><td>bool</td><td>Include the 48x48 image inside the output ICO file (which contains only 16x16 and 32x32 images by default).</td><td>true</td><td>true</td></tr><tr><td>$noOldApple</td><td>bool</td><td>exclude pngs files that used by old Apple touch devices</td><td>false</td><td>false</td></tr><tr><td>$noAndroid</td><td>bool</td><td>exclude <code>manifest.json</code> files and PNG files for Android devices</td><td>false</td><td>false</td></tr><tr><td>$noMs</td><td>bool</td><td>exclude images for Windows tile</td><td>false</td><td>false</td></tr></tbody></table>

### 🪄 Generate

Once you have configured it, run this command to generate the favicon:

```plaintext
php spark ci4favicon:generate
```

### ✨ Output

```html
<!DOCTYPE html>

	<html lang="en">

	<head>
        ...
        <?php
        	helper('ci4favicon');
        	echo ci4favicon();
        ?>
        ...
    </head>
    <body>
        
    </body>
</html>
```

is a HTML segment link this:

```php
<meta name="msapplication-config" content="/IEConfig.xml" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192" />
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
<link rel="manifest" href="/manifest.json" />
<meta name="application-name" content="Hieu Le Favicon" />
<meta name="msapplication-TileColor" content="#F0F0F0" />
<meta name="msapplication-TileImage" content="/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />
```

---

## Donate

Come support us to be even better!

[![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-buymeacoffee.com-logotext.png)](https://www.buymeacoffee.com/officialxviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-opencollective.com-logotext.png)](https://opencollective.com/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-patreon.com-logotext.png)](https://www.patreon.com/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-paypal.me-logotext.png)](https://paypal.me/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-trakteer.id-logotext.png)](https://trakteer.id/xviid)

---

## License

[**MIT License**](https://github.com/officialxviid/ci4favicon/blob/main/LICENSE).
