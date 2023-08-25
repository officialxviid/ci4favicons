<?php

namespace App\Commands\Systems;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use OfficialXVIID\CI4Favicons\Traits\FaviconsCommandTrait;

class FaviconsGenerator extends BaseCommand
{
    /** 
     * Use Favicons Command Trait 
     */
    use FaviconsCommandTrait;

    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CI4Favicons';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'ci4favicons:generate';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Generate favicon with CI4Favicons';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'ci4favicons:generate [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $this->showBanner();
    }
}
