<?php

namespace OfficialXVIID\CI4Favicons;

class Favicons extends BaseFavicons
{
    public function setInputFile(string $file)
    {
        $this->input = $file;
    }

    public function setOutputFolder(string $folder)
    {
        $this->output = $folder;
    }
}
