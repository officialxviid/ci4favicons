### CI4FAVICON TUTORIALS

![language](https://img.shields.io/static/v1?label=language&message=EN&style=plastic&color=blue)  ![author](https://img.shields.io/static/v1?label=author&message=XVIID%20Developer&style=plastic)  ![updated](https://img.shields.io/static/v1?label=updated&message=Nov%2013%202022&style=plastic&color=green)

Hi everyone! Are you ready to surf with CI4Favicon? Let's surf guys!

Basic Commands:

*   **ci4favicon:publish** is the most basic, publish count for copying a file or files into a project.
*   **ci4favicon:generate** is the command to generate a favicon.
*   **ci4favicon:help** is the command to display help to the user.
*   **ci4favicon:help** is a command to display credit information.

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

To generate a favicon, run the following command:

```plaintext
php spark ci4favicon:generate
```

---

### 🖥️ Output

There are 2 ways to display favicon to Views:

#### Method 1 “Calling the ci4favicon() helper to Views”.

So that the **“ci4favicon”** helper function can be called continuously, you can add **ci4favicon** to `$helpers` in **App\\Controllers\\BaseController.php**

```plaintext
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

abstract class BaseController extends Controller{
    protected $helpers = ['ci4favicon'];
    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }
}
```

Now, call the helper in your App\\Views\\welcome.php

```plaintext
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <!-- Call CI4Favicon Helper (Method 1)-->
    <?php echo ci4favicon(); ?>
    
    <!-- Call CI4Favicon Helper (Method 2)-->
    <?= ci4favicon(); ?>
    

</head>
<body>
    
</body>
</html>
```

> 💡Knowledges:
> 
> **\<?=** same as **\<?php echo**

#### Method 2 “Sending Parameters to Views”.

```plaintext
<?php

namespace App\Controllers;

class BlogController extends BaseController{
    public function index(){
        $data = [
            'title'         => 'My Blog',
            'description'    => '',
            'favicon'        => ci4favicon(),
        ];
        return view('blog', $data);
    }
}
```

Now, call the helper in your App\\Views\\welcome.php

```plaintext
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Call title param -->
    <title><?= $title; ?></title>
    
    <!-- Call description param -->
    <meta name="description" content="<?= $description; ?>">
    
    <!-- Call favicon param -->
    <?= $favicon; ?>
    
</head>
<body>
    
</body>
</html>
```

Done

---
