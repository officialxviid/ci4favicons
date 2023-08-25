<?php

namespace OfficialXVIID\CI4Favicons;

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
        // Checking
        $this->checkInputFile();
        $this->checkOutputFolder();

        // Generate
        $this->generateICO();
        $this->generatePNGs();
        $this->generateManifestJson();
    }
}
