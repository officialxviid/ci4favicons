<h1 align="left">
<a href="https://github.com/officialxviid/ci4favicons">
<img src="https://img.shields.io/badge/%E2%97%A0%E1%B4%A5%E2%97%A0-CI4Favicons-orange">
<br>
Installation
</a>
</h1>

<h2>Composer</h2>

<p>Installation is best done via <a href="https://getcomposer.org/">Composer</a>. Assuming Composer is installed globally, you may use the following command:</p>

<details><summary><b>Show command</b></summary>

```shell
composer require officialxviid/ci4favicons
```

</details>

<h2>Manual Installation</h2>

<p>Should you choose not to use Composer to install, you can clone or download this repo and
then enable it by editing <b>app/Config/Autoload.php</b> and adding the <code>OfficialXVIID\CI4Favicons</code> namespace to the <code>$psr4</code> array. For example, if you copied it into <b>app/ThirdParty/</b>:</p>

```php
    $psr4 = [
        'Config'                    => APPPATH . 'Config',
        APP_NAMESPACE               => APPPATH,
        'App'                       => APPPATH,
        'OfficialXVIID\CI4Favicons' => APPPATH . 'ThirdParty/ci4favicons/src',
    ];
```
