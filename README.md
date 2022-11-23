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
It supports:</p>
<ul>
  <li>Create one ICO file and many PNG files with many favicon sizes from just one original PNG image as well as a <code>manifest.json</code> file for Android devices. Both input file path and output folder (which contains images and json files) are configurable via a command line interface.</li>
  <li>Generate suitable <code>meta</code> and <code>link</code> tags for desktop web browsers as well as mobile touch devices to properly display favicon.</li>
</ul>

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
