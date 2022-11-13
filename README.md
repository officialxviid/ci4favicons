![](https://33333.cdn.cke-cs.com/kSW7V9NHUXugvhoQeFaf/images/f1db086732f08de88d73a7a45299fe7addc0d308cb98d867.png)

![](https://img.shields.io/badge/status-coming%20soon-orange) ![](https://img.shields.io/badge/type-plugins-ff69b4) [![](https://img.shields.io/badge/license-MIT-blue)](https://github.com/officialxviid/ci4favicon/blob/main/LICENSE)   
[![Facebook](https://img.shields.io/static/v1?label=Facebook&message=share&style=social&logo=facebook)](https://www.facebook.com/share.php?u=https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon&utm_medium=btn&utm_content=blog) [![Twitter](https://img.shields.io/static/v1?label=Twitter&message=share&style=social&logo=twitter)](https://twitter.com/intent/tweet?text=CI4Favicon&url=https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon) [![WhatsApp](https://img.shields.io/static/v1?label=WhatsApp&message=share&style=social&logo=whatsapp)](https://api.whatsapp.com/send/?text=CI4Favicon+https%3A%2F%2Fgithub.com%2Fofficialxviid%2Fci4favicon&type=custom_url&app_absent=0)

### 👁️ Overview

Auto generate favicons and HTML tags from a original PNG file.

Inspired by [`letrunghieu/favicon`](https://github.com/letrunghieu/favicon), this plugin will help you (_**CodeIgniter developer**_) to display the correct favicon for your website with just one original PNG image.

In more details, it supports:

*   Create **one** ICO file and **many** PNG files with many favicon sizes from just **one** original PNG image as well as a `manifest.json` file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.
*   Generate suitable `meta` and `link` tags for desktop web browsers as well as mobile touch devices to properly display favicon.

We provide a variety of languages ​​in interactive messaging systems and documentation. The supported languages ​​are as follows:

<table><tbody><tr><td><strong>Language</strong></td><td><strong>System</strong></td><td><strong>Docs</strong></td></tr><tr><td>English (EN)</td><td>✅</td><td>✅</td></tr><tr><td>Indonesian (ID)</td><td>✅</td><td>✅</td></tr></tbody></table>

---

### ⚙️ Installation

An installation is a place that contains equipment and machinery which are being used for a particular purpose.

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

---

### 📖 Tutorials

#### Github

We provide several different languages ​​on GitHub:

*   [English (EN)](https://github.com/officialxviid/ci4favicon/wiki/Tutorials-%5BEN%5D)
*   [Indonesian (ID)](https://github.com/officialxviid/ci4favicon/wiki/Tutorials-%5BID%5D)
*   [Japanese (JA)](https://github.com/officialxviid/ci4favicon/wiki/Tutorials-%5BJA%5D)

#### YouTube

You can watch video tutorials that we have uploaded on Youtube.

> _**CI4Favicon - 1.0.**_
> 
> https://youtube.com/

#### Download

Choose your preferred format to download

<table><tbody><tr><td><strong>Versions</strong></td><td><strong>Documents</strong></td><td><strong>Videos</strong></td></tr><tr><td>1.0</td><td>.pdf</td><td>.flv | .mp4 | .m3u8 | .ts | .3gp | .mov | .avi | .wmv</td></tr></tbody></table>

---

### 🫰 Sponsors

Let's support us to be more excited! Just scan or click the QR below:

[![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-buymeacoffee.com-logotext.png)](https://www.buymeacoffee.com/officialxviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-opencollective.com-logotext.png)](https://opencollective.com/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-patreon.com-logotext.png)](https://www.patreon.com/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-paypal.me-logotext.png)](https://paypal.me/xviid)  [![](https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/sponsors/qr/covers/200px/style1-trakteer.id-logotext.png)](https://trakteer.id/xviid)

---

### ⚖️ License

[**MIT License**](https://github.com/officialxviid/ci4favicon/blob/main/LICENSE).
