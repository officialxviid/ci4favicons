<h1 align="left">
<a href="https://github.com/officialxviid/ci4favicons">
<img src="https://img.shields.io/badge/%E2%97%A0%E1%B4%A5%E2%97%A0-CI4Favicons-orange">
<br>
IMagick
</a>
</h1>

<img src="https://imagemagick.org/image/wizard.jpg" align="right" alt="And Now a Touch of Magick" width="120" height="178">

<p>ImageMagick<a href="https://tsdr.uspto.gov/#caseNumber=78333969&caseType=SERIAL_NO&searchType=statusSearch">®</a> is a free, <a href="https://imagemagick.org/script/license.php">open-source</a> software suite, used for editing and manipulating digital images. It can be used to create, edit, compose, or convert bitmap images, and supports a wide range of file <a href="https://imagemagick.org/script/formats.php">formats</a>, including JPEG, PNG, GIF, TIFF, and PDF.</p>
<p>ImageMagick is widely used in industries such as web development, graphic design, and video editing, as well as in scientific research, medical imaging, and astronomy. Its versatile and customizable nature, along with its robust image processing capabilities, make it a popular choice for a wide range of image-related tasks.</p>
<p>ImageMagick includes a command-line interface for executing complex image processing tasks, as well as APIs for integrating its features into software applications. It is written in C and can be used on a variety of operating systems, including Linux, Windows, and macOS.</p>
<p>The main website for ImageMagick can be found at <a href="https://imagemagick.org">imagemagick.org</a>.</p>

<h2>Develop</h2>

<table>
    <tbody>
        <tr>
            <th>C</th>
            <td>Use the thread-safe <a href="https://imagemagick.org/script/magick-wand.php">MagickWand</a> library to convert, compose, and edit images from the C language. There is also the low-level thread-safe <a href="https://imagemagick.org/script/magick-core.php">MagickCore</a> library for wizard-level developers. The <a href="https://imagemagick.org/api/MagickCache/index.html">MagickCache API</a> is a development library to utilize an efficient <a href="https://github.com/ImageMagick/MagickCache#readme">image cache</a>.</td>
        </tr>
        <tr>
            <th>Ch</th>
            <td><a href="https://imagemagick.org/ChMagick">ChMagick</a> is a <a href="https://www.softintegration.com/">Ch</a> binding to the MagickCore and MagickWand API. Ch is an embeddable C/C++ interpreter for cross-platform scripting.</td>
        </tr>
        <tr>
            <th>C++</th>
            <td><a href="https://imagemagick.org/script/magick++.php">Magick++</a> provides a thread-safe object-oriented C++ interface to ImageMagick. See <a href="https://imagemagick.org/Magick++/tutorial/Magick++_tutorial.pdf">A Gentle Introduction to Magick++</a> for an introductory tutorial to Magick++. We include the <a href="https://imagemagick.org/Magick++/tutorial/Magick++_tutorial.odt">source</a> if you want to correct, enhance, or expand the tutorial.</td>
        </tr>
        <tr>
            <th>GO</th>
            <td><a href="https://github.com/gographics/imagick">GoImagick</a> is a set of Go bindings to ImageMagick's MagickWand and MagickCore C APIs.</td>
        </tr>
        <tr>
            <th>Java</th>
            <td><a href="http://www.jmagick.org/">JMagick</a> provides an object-oriented Java interface to ImageMagick. <a href="https://im4java.sourceforge.net/">Im4java</a> is a pure-java interface to the ImageMagick command-line.</td>
        </tr>
        <tr>
            <th>Javascript/TypeScript</th>
            <td><a href="https://github.com/KnicKnic/WASM-ImageMagick">WASM-ImageMagick</a> Webassembly compiliation of ImageMagick that allows serverless clientside bindings for Typescript and Javascript. Works in Progressive Web Apps.</td>
        </tr>
        <tr>
            <th>Julia</th>
            <td><a href="https://github.com/JuliaIO/ImageMagick.jl">JuliaIO</a> provides an object-oriented Julia interface to ImageMagick.</td>
        </tr>
        <tr>
            <th>KMagick</th>
            <td><a href="https://github.com/MolotovCherry/kmagick">KMagick</a> provides Kotlin bindings to ImageMagick.</td>
        </tr>
        <tr>
            <th>LabVIEW</th>
            <td><a href="http://forums.lavag.org/downloads-file90.html">LVOOP ImageMagick</a> is an object-oriented LabVIEW interface to ImageMagick.</td>
        </tr>
        <tr>
            <th>Lisp</th>
            <td><a href="https://cl-magick.common-lisp.dev/">CL-Magick</a> provides a Common Lisp interface to the ImageMagick library.</td>
        </tr>
        <tr>
            <th>Lua</th>
            <td><a href="https://github.com/leafo/magick">Lua</a> bindings to ImageMagick for LuaJIT using FFI.<br><a href="https://github.com/isage/lua-imagick">Lua</a> bindings to ImageMagick for Lua using pure-C.</td>
        </tr>
        <tr>
            <th>Neko</th>
            <td><a href="http://code.google.com/p/nmagick">NMagick</a> is a port of the ImageMagick library to the haXe and Neko platforms. It provides image manipulation capabilities to both web and desktop applications using Neko.</td>
        </tr>
        <tr>
            <th>.NET</th>
            <td>Use <a href="https://github.com/dlemstra/Magick.NET">Magick.NET</a> to convert, compose, and edit images from Windows .NET.<br><a href="https://sourceforge.net/projects/imagemagickapp/">ImageMagickApp</a> is a .NET application written in C# that utilizes the ImageMagick command line to allow conversion of multiple image formats to different formats.</td>
        </tr>
        <tr>
            <th>Pascal</th>
            <td><a href="https://wiki.freepascal.org/PascalMagick">PascalMagick</a> a Pascal binding for the MagickWand API and also the low-level MagickCore library. It works with Free Pascal / Lazarus and Delphi.</td>
        </tr>
        <tr>
            <th>Perl</th>
            <td>Use <a href="https://imagemagick.org/script/perl-magick.php">PerlMagick</a> to convert, compose, and edit images from the Perl language.</td>
        </tr>
        <tr>
            <th>PHP</th>
            <td><a href="http://pecl.php.net/package/imagick">IMagick</a> is a native PHP extension to create and modify images using the ImageMagick API. Documentation for the extension is available <a href="http://php.net/imagick">here</a>, and a site showing examples is available at <a href="https://phpimagick.com/">PHPImagick.com</a>.</td>
        </tr>
        <tr>
            <th>Python</th>
            <td><a href="http://wand-py.org/">Wand</a> is a ctypes-based ImagedMagick binding library for Python.<br><a href="https://imagemagick.org/archive/python/">PythonMagick</a> is an object-oriented Python interface to ImageMagick.<br><a href="http://www.assembla.com/wiki/show/pythonmagickwand">PythonMagickWand</a> is an object-oriented Python interface to MagickWand based on ctypes.<br><a href="https://siptoolbox.sourceforge.net/">Scilab Image Processing</a> toolbox utilizes ImageMagick to do imaging tasks such as filtering, blurring, edge detection, thresholding, histogram manipulation, segmentation, mathematical morphology, color image processing, etc.</td>
        </tr>
        <tr>
            <th>REALbasic</th>
            <td>The <a href="https://www.monkeybreadsoftware.de/xojo/plugin-imagemagick.shtml">MBS Realbasic ImageMagick</a> is a plugin that utilizes the power of ImageMagick from within the RealBasic environment.</td>
        </tr>
        <tr>
            <th>R</th>
            <td>The <a href="https://cran.r-project.org/web/packages/magick/index.html">magick</a> package wraps the Magick++ STL to provide vectorized image processing in R. Get started with using the package <a href="https://cran.r-project.org/web/packages/magick/vignettes/intro.html">vignette</a>.</td>
        </tr>
        <tr>
            <th>Ruby</th>
            <td><a href="https://rmagick.github.io/">RMagick</a> is an interface between the Ruby programming language and the <a href="https://imagemagick.org/script/magick-core.php">MagickCore</a> image processing libraries. Get started with RMagick by perusing the <a href="https://rmagick.github.io/">documentation</a>.<br><a href="http://magickwand.rubyforge.org/">MagickWand for Ruby</a> is an interface between the Ruby programming language and the <a href="https://imagemagick.org/script/magick-wand.php">MagickWand</a> image processing libraries. Get started with MagickWand for PHP by perusing the <a href="http://magickwand.rubyforge.org/">documentation</a>.<br><a href="https://github.com/minimagick">MiniMagick</a> is a Ruby wrapper for ImageMagick command line. MiniMagick gives you convenient access to all the command line options ImageMagick supports.<br><a href="http://quickmagick.rubyforge.org/quick_magick">QuickMagick</a> is a gem for easily accessing ImageMagick command line tools from Ruby programs.</td>
        </tr>
        <tr>
            <th>Rust</th>
            <td><a href="https://github.com/nlfiedler/magick-rust">MagickRust</a> is a MagickWand bindings for the Rust language.</td>
        </tr>
        <tr>
            <th>Tcl/Tk</th>
            <td><a href="https://imagemagick.org/archive/tcl/">TclMagick</a> a native Tcl-extension to the ImageMagick MagickWand API.</td>
        </tr>
        <tr>
            <th>WebAssembly</th>
            <td><a href="https://github.com/dlemstra/Magick.WASM">Magick.WASM</a> the WASM library for ImageMagick.</td>
        </tr>
        <tr>
            <th>XML RPC</th>
            <td><a href="https://code.google.com/archive/p/remotemagick/">RemoteMagick</a> is an XML-RPC web service that creates image thumbnails.</td>
        </tr>
    </tbody>
</table>

<p>
    <a href="https://javadoc.io/doc/jmagick/jmagick/latest/index.html"><img src="https://img.shields.io/badge/%20-IMagick-white?logo=php"></a>
    <a href="https://imagemagick.org/script/magick-wand.php"><img src="https://img.shields.io/badge/%20-MagickWand-gray?logo=c"></a>
    <a href="https://imagemagick.org/script/magick++.php"><img src="https://img.shields.io/badge/%20-Magick%2B%2B-044F88?logo=c%2B%2B"></a>
    <a href="https://github.com/gographics/imagick"><img src="https://img.shields.io/badge/%20-GoImagick-black?logo=go"></a>
    <a href="https://javadoc.io/doc/jmagick/jmagick/latest/index.html"><img src="https://img.shields.io/badge/Java-JMagick-white?logo=java"></a>
    <a href="https://github.com/KnicKnic/WASM-ImageMagick"><img src="https://img.shields.io/badge/%20-WASM--ImageMagick-black?logo=javascript"></a>
    <a href="https://github.com/KnicKnic/WASM-ImageMagick"><img src="https://img.shields.io/badge/%20-WASM--ImageMagick-black?logo=typescript"></a>
    <a href="https://github.com/KnicKnic/WASM-ImageMagick"><img src="https://img.shields.io/badge/Pascal-PascalMagick-blue?logo=pascal"></a>
    <a href="https://imagemagick.org/script/perl-magick.php"><img src="https://img.shields.io/badge/%20-PerlMagick-purple?logo=perl"></a>
    <a href="https://pecl.php.net/package/imagick"><img src="https://img.shields.io/badge/%20-IMagick-white?logo=php"></a>
    <a href="https://pecl.php.net/package/imagick"><img src="https://img.shields.io/badge/%20-IMagick-ffd43b?logo=python"></a>
</p>
