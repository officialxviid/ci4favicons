### CI4FAVICON TUTORIALS

![language](https://img.shields.io/static/v1?label=language&message=EN&style=plastic&color=blue)  ![author](https://img.shields.io/static/v1?label=author&message=XVIID%20Developer&style=plastic)  ![updated](https://img.shields.io/static/v1?label=updated&message=Nov%2013%202022&style=plastic&color=green)

Halo semuanya! Apakah Anda siap untuk berselancar dengan CI4Favicon? Ayo mulai berselancar guys!

Perintah Dasar:

*   **ci4favicon:publish** adalah yang paling dasar, jumlah publikasikan untuk menyalin file atau file ke dalam proyek.
*   **ci4favicon:generate** adalah perintah untuk membuat favicon.
*   **ci4favicon:help** adalah perintah untuk menampilkan bantuan kepada pengguna.
*   **ci4favicon:credit** adalah perintah untuk menampilkan informasi kredit.

---

### Daftar Isi

1.  [Persiapan](#%EF%B8%8F-preparation)
2.  [Instalasi](#%EF%B8%8F-installation)
3.  [Publish](#-publish)
4.  [Konfigurasi](#-config)
5.  [Generate](#-generate)
6.  [Output](#%EF%B8%8F-output)

---

### ✏️ Persiapan

Siapkan file PNG untuk dijadikan favicon.

<table><tbody><tr><td><strong>File</strong></td><td><strong>Input Path (ROOTPATH)</strong></td><td><strong>Output Path (FCPATH/public folder)</strong></td><td><strong>Pengaturan</strong></td></tr><tr><td><figure class="image image_resized" style="width:52.27%;"><img src="https://raw.githubusercontent.com/officialxviid/ci4favicon/main/dist/images/logo/xviid144.png" alt="language"></figure><p><strong>XVIID.png</strong></p><p>1080x1080 px</p><p>7,21 Mb</p></td><td>writable/dist/favicon/XVIID.png</td><td>./</td><td><p>✅ Icon 64</p><p>✅ Icon 48</p><p>✅ Old Apple</p><p>✅ Android</p><p>✅ Ms</p><p>❌ Browser Config</p></td></tr></tbody></table>

---

### **⚙️** Instalasi

Instalasi adalah tempat yang berisi peralatan dan mesin yang digunakan untuk tujuan tertentu.

#### Instalasi Menggunakan Composer

Instalasi paling baik dilakukan melalui Composer. Dengan asumsi Composer diinstal secara global, Anda dapat menggunakan perintah berikut:

```plaintext
composer require officialxviid/ci4favicon
```

Ini akan menambahkan rilis stabil terbaru dari **OfficialXVIID:CI4Favicon** sebagai modul untuk proyek Anda.

#### Instalasi Manual

Jika Anda memilih untuk tidak menggunakan Composer untuk menginstal, Anda dapat mengkloning atau mengunduh repo ini dan kemudian mengaktifkannya dengan mengedit **app/Config/Autoload.php** dan menambahkan namespace `OfficialXVIID\CI4Favicon` ke array `$psr4`. Misalnya, jika Anda menyalinnya ke **app/ThirdParty/**:

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

Untuk mulai berselancar dengan CI4Favicon, jalankan perintah berikut:

```plaintext
php spark ci4favicon:publish
```

Ini akan menghasilkan **App\\Config\\CI4Favicon.php** dan **App\\Helpers\\ci4favicon\_helper.php**

---

### 👨🏻‍🔧 Config

Buka **App\\Config\\CI4Favicon.php** Anda, dan konfigurasikan sesuai kebutuhan Anda.

Misalnya, saya akan mengkonfigurasi sesuai dengan pengaturan saya sebelumnya.

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

Untuk menghasilkan favicon, jalankan perintah berikut:

```plaintext
php spark ci4favicon:generate
```

---

### 🖥️ Output

Ada 2 cara untuk menampilkan favicon ke Views:

#### Cara 1 “_Memanggil helper ci4favicon() ke Views_”.

Agar fungsi helper “**ci4favicon**” dapat dipanggil terus menerus, Anda dapat menambahkan **ci4favicon** ke `$helpers` di **App\\Controllers\\BaseController.php**

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

Sekarang, panggil helper di **App\\Views\\welcome.php** Anda

```plaintext
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <!-- Memanggil helper CI4Favicon (Cara 1)-->
    <?php echo ci4favicon(); ?>
    
    <!-- Memanggil helper CI4Favicon (Cara 2)-->
    <?= ci4favicon(); ?>
    

</head>
<body>
    
</body>
</html>
```

> 💡Pengetahuan:
> 
> **\<?=** sama dengan **\<?php echo**

#### Cara 2 “Mengirim Variabel ke Tampilan”.

Misalnya, saya membuat **Pengontrol Blog** di **App\\Controllers\\BlogController.php**

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

Misalnya, saya membuat Pengontrol Blog di **App\\Controllers\\BlogController.php**.

```plaintext
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Memanggil variabel title -->
    <title><?= $title; ?></title>
    
    <!-- Memanggil variabel description -->
    <meta name="description" content="<?= $description; ?>">
    
    <!-- Memanggil variabel favicon -->
    <?= $favicon; ?>
    
</head>
<body>
    
</body>
</html>
```

Selesai
