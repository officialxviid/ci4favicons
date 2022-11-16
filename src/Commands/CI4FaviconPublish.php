<?php

/**
 * 🆇🆅🅸🅸🅳 🅲🆁🅴🅳🅸🆃🆂 
 *
 * This file is part of CI4Favicon.
 *
 * @copyright (c) XVIID <https://xviid.net>
 * @version 1.0
 * @package CI4Favicon
 * @author XVIID Developer <developer@xviid.net>
 * @since 2022-10-31 11:12:18
 */

namespace OfficialXVIID\CI4Favicon\Commands;

use CodeIgniter\CLI\BaseCommand;
use OfficialXVIID\CI4Favicon\Traits\PublisherTrait;
use OfficialXVIID\CI4Favicon\Traits\CLITrait;

class CI4FaviconPublish extends BaseCommand
{
    /** 
     * @uses CLITrait
     */
    use CLITrait;

    /** 
     * @uses PublisherTrait
     */
    use PublisherTrait;

    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CI4Favicon';

    /**
     * The Command's Name
     *
     * @var string
     */
	protected $name = 'ci4favicon:publish';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'To start and configure CI4Favicon';

    /**
     * The Command's Usage
     *
     * @var string
     */
	protected $usage = 'ci4favicon:publish';

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
        // Template Header CLI
        $this->cliHeader();

        // Determine Source Path (src)
        $this->determineSourcePath();

        // Publish Config File to user App\Config
        $this->publishConfig();

        // Publish Helper File to user App\Helpers
        $this->publishHelper();
    }
}
