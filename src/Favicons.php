<?php

namespace OfficialXVIID\CI4Favicons;

use CodeIgniter\CLI\CLI;
use OfficialXVIID\CI4Favicons\Exceptions\FaviconsException;

class Favicons extends BaseFavicons
{
    /** 
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /** 
     * Set input file 
     */
    public function setInputFile(string $file)
    {
        $this->input = $file;
    }

    /** 
     * Set output folder
     */
    public function setOutputFolder(string $folder)
    {
        $this->output = $folder;
    }

    /** 
     * Get input file 
     */
    public function inputFile(): string
    {
        return $this->input;
    }

    /** 
     * Get output folder
     */
    public function outputFolder(): string
    {
        return $this->output;
    }

    /** 
     * Generate 
     */
    public function generate()
    {
        // Checking Input
        if (!$this->checkInputFile()) {
            throw FaviconsException::forInputFileNotExist();
            exit(1);
        }

        // Checking Output
        if (!$this->checkOutputFolder()) {
            if (is_cli()) {
                if (CLI::prompt(lang('Favicons.doYouWantToCreateOutputPath', [lang('Favicons.yes'), lang('Favicons.no')])) == lang('Favicons.yes')) {
                    mkdir($this->output, 0755);
                } else {
                    throw FaviconsException::forOutputDirectoryNotExist();
                    exit(1);
                }
            } else {
                throw FaviconsException::forOutputDirectoryNotExist();
                exit(1);
            }
        }

        // Generate
        $this->generateICO();
        $this->generatePNGs();
        $this->generateManifestJson();
    }
}