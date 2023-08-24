<?php

namespace OfficialXVIID\CI4Favicons;

use Imagine\Imagick\Imagine;

abstract class BaseFavicons
{
    abstract public function setInputFile(string $file);
    abstract public function setOutputFolder(string $file);
}
