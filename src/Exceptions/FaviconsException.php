<?php

namespace OfficialXVIID\CI4Favicons\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;

class FaviconsException extends \RuntimeException implements ExceptionInterface
{
    public static function forFailedToLoadImagine()
    {
        return new static(lang('Favicons.failedToLoadImagine'));
    }
}
