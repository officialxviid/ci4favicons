<h1 align="center">
  <a href="https://github.com/officialxviid/ci4favicon">
    <img src="https://raw.githubusercontent.com/officialxviid/officialxviid/main/assets/ci4favicon/logo-symbol.png" width="250"/>
  </a>
  <br>
  CI4Favicon
</h1>

<h4 align="center">Auto generate favicons and HTML tags from a original PNG file</h4>

<p align="center">
  <a href="https://github.com/officialxviid/ci4favicon/releases" rel="nofollow">
    <img src="https://img.shields.io/badge/status-develop-orange" alt="Status" data-canonical-src="https://img.shields.io/badge/status-develop-orange" style="max-width:100%;">
  </a>
  <img src="https://img.shields.io/badge/language-9-blueviolet" alt="Languages" data-canonical-src="https://img.shields.io/badge/language-9-blueviolet" style="max-width:100%;">
  <img src="https://img.shields.io/badge/sponsors-8-ff69b4" alt="Sponsors" data-canonical-src="https://img.shields.io/badge/sponsors-8-ff69b4" style="max-width:100%;">
  <a href="https://github.com/officialxviid/ci4favicon/blob/master/LICENSE" target="_blank" rel="nofollow">
    <img src="https://img.shields.io/badge/license-MIT-blue" alt="MIT License" data-canonical-src="https://img.shields.io/badge/license-MIT-blue" style="max-width:100%;">
    </a>
</p>

<blockquote align="center">
This plugin will help you (CodeIgniter developer) to display the correct favicon for your website with just one original PNG image.
</blockquote>

<p align="center">
  <a href="#introduction">Introductions</a>&nbsp;|&nbsp;<a href="#getting-started">Getting Started</a>&nbsp;|&nbsp;<a href="https://github.com/officialxviid/ci4favicon/wiki/Docs">Docs</a>&nbsp;|&nbsp;<a href="#license">License</a>
</p>

<h5 align="center">Powered by <a href="https://xviid.net" target="_blank">XVIID</a></h5>

<br>

<h2>Introduction</h2>

<h3>👁️ Overviews</h3>
<p>It supports:</p>
<ul>
  <li>Create one ICO file and many PNG files with many favicon sizes from just one original PNG image as well as a <code>manifest.json</code> file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.</li>
  <li>Generate suitable <code>meta</code> and <code>link</code> tags for desktop web browsers as well as mobile touch devices to properly display favicon.</li>
</ul>
<p>Language supports: English (en), Indonesian (id), Japanese (ja), Russian (ru), German (de), Spanish (es), Turkish (tr), Simplified Chinese (zh), Persian (fa)</p>

<h3>🧰 Requirements</h3>
<p>CI4Favicon has the following requirements:</p>
<ul>
  <li>PHP 7.4+</li>
  <li>PHP GD</li>
  <li>CodeIgniter Framework</li>
</ul>

<h3>📏 Sizes</h3>
<p>CI4Favicon generates the following sizes:</p>
<ul>
  <li><b>favicon:</b> 16x16, 32x32 and 96x96.</li>
  <li><b>android-chrome:</b> 36x36, 48x48, 72x72, 96x96, 144x144 and 192x192.</li>
  <li><b>mstile:</b> 70x70, 144x144, 150x150, 310x310 and 310x150.</li>
  <li><b>apple-touch-icon:</b> 57x57, 60x60, 72x72, 76x76, 114x114, 120x120, 152x152 and 180x180.</li>
</ul>

<h3>💻 Basic Commands</h3>
<ul>
  <li><code>ci4favicon:publish</code> to start and copy the CI4Favicon Config file to your application.</li>
  <li><code>ci4favicon:generate</code> to generate favicon.</li>
  <li><code>ci4favicon:help</code> to show help.</li>
</ul>

<h2>Getting Started</h2>

<h3>🎁 Preparation</h3>
<p>Use high-quality PNG files for good results. I recommend the minimum size is 512x512 px.</p>

<h3>📥 Installation</h3>
<p>We need <a href="http://php.net/manual/en/book.imagick.php" target="_blank">PHP imagick extension</a> or <a href="http://php.net/manual/en/book.image.php" target="_blank">PHP GD extension</a> for generating images. By default, the Imagick extension is loaded, if you cannot install it, you can switch to using GD <s>via command line option</s> if available.</p>
<p><b>Installation Using Composer</b></p>
<p>Installation is best done via Composer. Assuming Composer is installed globally, you may use the following command:</p>
<pre><code class="lang-bash"><span class="hljs-symbol">composer</span> <span class="hljs-meta">require</span> officialxviid/ci4favicon
</code></pre>
<p><b>Manual Installation</b></p>
<p>Should you choose not to use Composer to install, you can clone or download this repo and then enable it by editing <b>app/Config/Autoload.php</b> and adding the <b>OfficialXVIID\CI4Favicon</b> namespace to the <code>$psr4</code> array. For example, if you copied it into <b>app/ThirdParty/</b>:</p>
<pre><code class="lang-php">$psr4 = [
    <span class="hljs-string">'Config'</span>                      =&gt; APPPATH . <span class="hljs-string">'Config'</span>,
    APP_NAMESPACE                 =&gt; APPPATH,
    <span class="hljs-string">'App'</span>                         =&gt; APPPATH,
    <span class="hljs-string">'OfficialXVIID\CI4Favicon'</span>    =&gt; APPPATH . <span class="hljs-string">'ThirdParty/ci4favicon-1.0.0/src'</span>,
];
</code></pre>

<h3>🚀 Publishing</h3>
<p>To copy files within a project using robust detection and error checking, run the following command:</p>
<pre><code class="lang-bash"><span class="hljs-selector-tag">php</span> <span class="hljs-selector-tag">spark</span> <span class="hljs-selector-tag">ci4favicon</span><span class="hljs-selector-pseudo">:publish</span>
</code></pre>
<p>This will generate <b>App\Config\CI4Favicon.php</b></p>

<h3>⚙️ Config</h3>
<p>Configure your <b>App\Config\CI4Favicon.php</b></p>
<ul>
  <li><code>$input</code>: Path to the input image files, which is required</li>
  <li><code>$output</code>: Path to the folder which contains output files. If this folder does not exist, the package will try to create it. This argument is optional, default value is current folder.</li>
  <li><code>$appName</code>: Set the application name in the <b>manifest.json</b> file. Default is an empty string.</li>
  <li><code>$tileColor</code>: The background of live tile when this site is pinned. Fill in a HEX color for your <a href="https://learn.microsoft.com/en-us/windows-hardware/customize/desktop/unattend/microsoft-windows-helpandsupport-helpandsupport-tilecolor" target="_blank">Tile Color</a>.</li>
  <li><code>$browserConfigFile</code>: The path to browser config XML file if you have it. By default, it is set to an empty string to prevent IE from auto looking <b>browserconfig.xml</b> file. If you have a browser configuration, put the file in the public folder.</li>
  <li><code>$ico64</code>: Include the 64x64 image inside the output ICO file (which contains only 16x16 and 32x32 images by default)</li>
  <li><code>$ico48</code>: Include the 48x48 image inside the output ICO file (which contains only 16x16 and 32x32 images by default).</li>
  <li><code>$noOldApple</code>: Exclude pngs files that used by old Apple touch devices.</li>
  <li><code>$noAndroid</code>: Exclude <b>manifest.json</b> files and PNG files for Android devices</li>
  <li><code>$noMs</code>: Exclude images for Windows tile</li>
</ul>

<h3>🪄 Generate</h3>
<p>Once you have configured it, run this command to generate the favicon:</p>
<pre><code class="lang-bash">php spark ci4favicon:<span class="hljs-keyword">generate</span>
</code></pre>
<p>This will output the resulting favicon in your <code>$output</code>.</p>

<h3>🌐 Output</h3>
<p>To produce HTML Tag output, there are 2 ways you can do it.</p>
<ul>
  <li>
    <b>Send variables from Controllers to Views.</b>
    <br>
    open your <b>app\Controllers\Home.php</b>
    <br>
    <pre><code class="language-php">&lt;?php
namespace App\Controllers;
use OfficialXVIID\CI4Favicon\CI4Favicon;
class Home extends BaseController{
    public function index(){
        $favicon = new CI4Favicon();
        $favicon-&gt;output();
        $data['favicon'] = $favicon;
        return view('welcome_message', $data);
    }
    
}</code></pre>
    <br>
    open your <b>app\Views\welcome_message.php</b>
    <br>
    <pre><code class="lang-html">    &lt;head&gt;
        ...
        &lt;?= $favicon; ?&gt;
        ...
    &lt;/head&gt;</code></pre>
    <br>
  </li>
  <li>
    <b>Using helpers.</b>
    <br>
    open your <b>app\Views\welcome_message.php</b>
    <br>
    <pre><code class="lang-html">    &lt;head&gt;
        ...
        &lt;?php
        	helper('ci4favicon');
        	echo ci4favicon();
        ?&gt;
        ...
    &lt;/head&gt;</code></pre>
  </li>
</ul>

<p><b>HTML Tag Result:</b></p>
<pre><code class="lang-html"><span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-config"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/IEConfig.xml"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"57x57"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-57x57.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"60x60"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-60x60.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"72x72"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-72x72.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"114x114"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-114x114.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"76x76"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-76x76.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"120x120"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-120x120.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"152x152"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-152x152.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"apple-touch-icon"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"180x180"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/apple-touch-icon-180x180.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"image/png"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/favicon-32x32.png"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"32x32"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"image/png"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/android-chrome-192x192.png"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"192x192"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"icon"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"image/png"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/favicon-16x16.png"</span> <span class="hljs-attr">sizes</span>=<span class="hljs-string">"16x16"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">link</span> <span class="hljs-attr">rel</span>=<span class="hljs-string">"manifest"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/manifest.json"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"application-name"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"CI4Favicon App"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-TileColor"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"#F0F0F0"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-TileImage"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/mstile-144x144.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-square70x70logo"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/mstile-70x70.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-square150x150logo"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/mstile-150x150.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-wide310x150logo"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/mstile-310x150.png"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">meta</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"msapplication-square310x310logo"</span> <span class="hljs-attr">content</span>=<span class="hljs-string">"/mstile-310x310.png"</span> /&gt;</span>
</code></pre>

<h2>License</h2>

<p>CI4Favicon is under <b>MIT License</b>. See the <a href="https://github.com/officialxviid/disgester/blob/master/LICENSE" target="_blank">LICENSE</a> file for more detail.</p>
