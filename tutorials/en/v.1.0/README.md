### CI4FAVICON TUTORIALS

![language](https://img.shields.io/static/v1?label=language&message=EN&style=plastic&color=blue)  ![author](https://img.shields.io/static/v1?label=author&message=XVIID%20Developer&style=plastic)

Hi everyone! Are you ready to surf with CI4Favicon? Let's surf guys!

---

### Table Of Contents

1.  [Preparation](#%EF%B8%8F-preparation)
2.  [Installation](#%EF%B8%8F-installation)
3.  [Publish](#-publish)
4.  [Config](#-config)
5.  [Generate](#-generate)
6.  [Output](#%EF%B8%8F-output)

---

### ✏️ Preparation

Prepare a PNG file to be a favicon.

<table><tbody><tr><td><strong>File</strong></td><td><strong>Input Path (ROOTPATH)</strong></td><td><strong>Output Path (FCPATH/public folder)</strong></td><td><strong>Setting</strong></td></tr><tr><td><figure class="image image_resized" style="width:52.27%;"><img src="https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/logo/xviid144.png" alt="language"></figure><p><strong>XVIID.png</strong></p><p>1080x1080 px</p><p>7,21 Mb</p></td><td>writable/dist/favicon/XVIID.png</td><td>./</td><td><p>✅ Icon 64</p><p>✅ Icon 48</p><p>✅ Old Apple</p><p>✅ Android</p><p>✅ Ms</p><p>❌ Browser Config</p></td></tr></tbody></table>

---

### **⚙️** Installation

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

### 🚀 Publish

To start surfing with CI4Favicon, run the following command:

```plaintext
php spark ci4favicon:publish
```

This will generate **App\\Config\\CI4Favicon.php** and **App\\Helpers\\ci4favicon\_helper.php**

---

### 👨🏻‍🔧 Config

Open your **App\\Config\\CI4Favicon.php**, and configure it according to your needs.

For example, I will configure according to my previous setup.

```plaintext
<?php

namespace Config;

class CI4Favicon extends OfficialXVIID\CI4Favicon\Config\CI4Favicon {
    public $appName = 'XVIID App';
     
    public $input = 'writable/dist/favicon/my-logo.png';
     
    public $output = '';
     
    public $tileColor = '#EC1D00'; 
    
    public $enableAll = false;
     
    public $browserConfigFile = '';
     
    public $useIcon64 = true;
     
    public $useIcon48 = true;
     
    public $noOldApple = false;
     
    public $noAndroid = false;
     
    public $noMs = false;
}
```

---

### ⚡ Generate

---

### 🖥️ Output
