<h1 align="center">
  <a href="https://github.com/officialxviid/ci4favicon">
    <img src="https://raw.githubusercontent.com/officialxviid/officialxviid/main/assets/ci4favicon/logo-symbol.png" width="250"/>
  </a>
  <br>
  CI4Favicon
</h1>

<h4 align="center">Auto generate favicons and HTML tags from a original PNG file</h4>

<p align="center">
  <a href="https://github.com/officialxviid/disgester/releases" rel="nofollow">
    <img src="https://img.shields.io/badge/status-develop-orange" alt="Last Version" data-canonical-src="https://img.shields.io/badge/status-maintenance-orange" style="max-width:100%;">
  </a>
  <img src="https://img.shields.io/badge/sponsors-8-ff69b4" alt="Vendors" data-canonical-src="https://img.shields.io/badge/vendors-74-orange" style="max-width:100%;">
  <a href="https://github.com/officialxviid/disgester/blob/master/LICENSE" rel="nofollow">
    <img src="https://img.shields.io/badge/license-MIT-blue" alt="MIT License" data-canonical-src="https://img.shields.io/badge/license-MIT-blue" style="max-width:100%;">
    </a>
</p>

<blockquote align="center">
This plugin will help you (CodeIgniter developer) to display the correct favicon for your website with just one original PNG image.
</blockquote>

<p align="center">
  <a href="https://github.com/officialxviid/ci4favicon/wiki/Getting-Started">Getting started</a>&nbsp;|&nbsp;<a href="https://github.com/officialxviid/ci4favicon/wiki/Guidelines">Guidelines</a>&nbsp;|&nbsp;<a href="https://github.com/officialxviid/ci4favicon/blob/master/LICENSE">License</a>
</p>

<h5 align="center">Powered by <a href="https://xviid.net" target="_blank">XVIID</a></h5>

<br>

<h2>Introduction</h2>

<h3>Overview</h3>
<p>It supports:</p>
<ul>
  <li>Create one ICO file and many PNG files with many favicon sizes from just one original PNG image as well as a <code>manifest.json</code> file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.</li>
  <li>Generate suitable <code>meta</code> and <code>link</code> tags for desktop web browsers as well as mobile touch devices to properly display favicon.</li>
</ul>
<p>Language supports: English (en), Indonesian (id), Japanese (ja), Russian (ru), German (de), Spanish (es), Turkish (tr), Simplified Chinese (zh), Persian (fa)</p>

<h3>Basic Commands</h3>
<ul>
  <li><code>ci4favicon:publish</code> to start and copy the CI4Favicon Config file to your application.</li>
  <li><code>ci4favicon:generate</code> to generate favicon.</li>
  <li><code>ci4favicon:help</code> to show help.</li>
  <li><code>ci4favicon:credit</code> to display credit information.</li>
</ul>

<h3>Basic Constant</h3>
<ul>
  <li><code>ROOTPATH</code> is <b>your_project/</b>.</li>
  <li><code>FCPATH</code> is <b>your_project/public/</b>.</li>
  <li><code>APP_NAMESPACE</code> is <b>your_project/app/</b>.</li>
  <li><code>COMPOSER_PATH</code> is <b>your_project/vendor/autoload.php</b>.</li>
  <li><code>__DIR__</code> is a "magic constant" in PHP 5.3 or above which always refers to the current directory of the file from which it is called.</li>
  <li><code>__FILE__</code> is simply the name of the current file.</li>
</ul>

<h2>Getting Started</h2>

<h3>Preparation</h3>
<p>Use high-quality PNG files for good results. I recommend that the minimum size is 512x512 px.</p>

<h3>Installation</h3>
<p>We need <a href="http://php.net/manual/en/book.imagick.php">PHP imagick extension</a> or <a href="http://php.net/manual/en/book.image.php">PHP GD extension</a> for generating images. By default, the Imagick extension is loaded, if you cannot install it, you can switch to using GD <s>via command line option</s> if available.</p>
<p><b>Installation Using Composer</b></p>
<p>Installation is best done via Composer. Assuming Composer is installed globally, you may use the following command:</p>
<pre><code class="lang-bash"><span class="hljs-symbol">composer</span> <span class="hljs-meta">require</span> officialxviid/ci4favicon
</code></pre>
