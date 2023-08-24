<?php

namespace OfficialXVIID\CI4Favicons\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;

class FaviconsException extends \RuntimeException implements ExceptionInterface
{
    /**
     * For Failed To Load Imagine 
     */
    public static function forFailedToLoadImagine()
    {
        return new static(lang('Favicons.failedToLoadImagine'));
    }

    /**
     * Invalid Image Name 
     */
    public static function forInvalidImageName()
    {
        return new static(lang('Favicons.invalidImageName'));
    }
}
