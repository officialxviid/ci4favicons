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
use OfficialXVIID\CI4Favicon\Config\CreditConfig;

class CreditCommand extends BaseCommand
{
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
	protected $name = 'CI4Favicon:credit';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'To display credit information';

    /**
     * The Command's Usage
     *
     * @var string
     */
	protected $usage        = 'CI4Favicon:credit';

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
        $credit = new CreditConfig();
        $credit->getCLIHeader();
        $credit->getCLIInfoCredit();
    }
}
