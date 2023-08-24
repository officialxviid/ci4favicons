<?php

namespace OfficialXVIID\CI4Favicons;

abstract class BaseFavicons
{
    /** 
     * Input file
     * 
     * @var string 
     */
    protected string $input;

    /** 
     * Output folder
     * 
     * @var string 
     */
    protected string $output;


    /** 
     * Set input file
     */
    abstract public function setInputFile(string $file);

    /** 
     * Set output folder
     */
    abstract public function setOutputFolder(string $folder);
}
