![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/f1db086732f08de88d73a7a45299fe7addc0d308cb98d867.png)

![](https://img.shields.io/badge/status-coming%20soon-orange) [![](https://img.shields.io/badge/license-MIT-blue)](https://github.com/officialxviid/ci4favicon/blob/main/LICENSE)

### 👁️ Overview

Auto generate favicons and HTML tags from a original PNG file.

Inspired by [`letrunghieu/favicon`](https://github.com/letrunghieu/favicon), this plugin will help you (_**CodeIgniter developer**_) to display the correct favicon for your website with just one original PNG image.

In more details, it supports:

*   Create **one** ICO file and **many** PNG files with many favicon sizes from just **one** original PNG image as well as a `manifest.json` file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.
*   Generate suitable `meta` and `link` tags for desktop web browsers as well as mobile touch devices to properly display favicon.

---

### ⚙️ Installation

An installation is a place that contains equipment and machinery which are being used for a particular purpose.

#### Installation Using Composer

Installation is best done via Composer. Assuming Composer is installed globally, you may use the following command:

```plaintext
composer require officialxviid/CI4Favicon
```

This will add the latest stable release of **OfficialXVIID:CI4Favicon** as a module to your project.

#### Manual Installation

Should you choose not to use Composer to install, you can clone or download this repo and then enable it by editing **app/Config/Autoload.php** and adding the `OfficialXVIID\CI4Favicon` namespace to the `$psr4` array. For example, if you copied it into **app/ThirdParty/**:

```php
$psr4 = [
    'Config'                      => APPPATH . 'Config',
    APP_NAMESPACE                 => APPPATH,
    'App'                         => APPPATH,
    'OfficialXVIID\CI4Favicon'    => APPPATH . 'ThirdParty/CI4Favicon-1.0/src',
];
```

---

### 📖 Tutorials

#### Github

We provide several different languages ​​on GitHub:

*   English (EN)
*   Indonesian (ID)

#### YouTube

You can watch video tutorials that we have uploaded on Youtube.

> _**CI4Favicon - 1.0.**_
> 
> [https://youtube.com/](https://youtube.com/)

#### Download

<table><tbody><tr><td><strong>Versions</strong></td><td><strong>Documents</strong></td><td><strong>Videos</strong></td></tr><tr><td>1.0</td><td>.pdf</td><td>.flv | .mp4 | .m3u8 | .ts | .3gp | .mov | .avi | .wmv</td></tr></tbody></table>

---

### 🫰 Sponsors

Let's support us to be more excited! Just scan or click the QR below:

[![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/3a57a66364c7eb48d5b167b66af06534b84721ac929c6705.png)](https://www.buymeacoffee.com/officialxviid)  [![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/6b434eeee9b4d80d11ad69c2fe2b556f419e183bb1baf925.png)](https://opencollective.com/xviid)  [![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/b0801c03259d4d90b7e8f57af7efa9005a297fe665f5e5ce.png)](https://www.patreon.com/xviid)  [![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/849688d9e06475efa7555827c7577e0ac39c4142789b2bf1.png)](https://paypal.me/xviid)  [![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/f6b6e458d1165015ef164b5d502085da5042e4862b29bae7.png)](https://trakteer.id/xviid)

---

### ⚖️ License

[**MIT License**](https://github.com/officialxviid/CI4Favicon/blob/main/LICENSE).
