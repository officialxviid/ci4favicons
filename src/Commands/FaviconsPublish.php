<?php

namespace OfficialXVIID\CI4Favicons\Commands;

use Config\Autoload;
use CodeIgniter\CLI\CLI;
use CodeIgniter\CLI\BaseCommand;
use OfficialXVIID\CI4Favicons\Traits\FaviconsCommandTrait;

class FaviconsPublish extends BaseCommand
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
    protected $name = 'ci4favicons:publish';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'CI4Favicons config file publisher.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'ci4favicons:publish';

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
     * The path to OfficialXVIID\CI4Favicons\src directory.
     *
     * @var string
     */
    protected $sourcePath;

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        // Show Banner
        $this->showBanner();

        // Determine Source Path
        $this->determineSourcePath();

        // Publish Config
        $this->publishConfig();

        // Completed
        CLI::write(lang('Favicons.completed'), 'green');
    }

    /**
     * Determines the current source path from which all other files are located.
     */
    protected function determineSourcePath()
    {
        $this->sourcePath = realpath(__DIR__ . '/../');
        if ($this->sourcePath == '/' || empty($this->sourcePath)) {
            // Unable to determine the correct source directory
            CLI::error(lang('Favicons.unableToDetermineTheCorrectSourceDirectory'));
            exit();
        }
    }

    /**
     * Publish config file.
     */
    protected function publishConfig()
    {
        $path = $this->sourcePath . '/Config/Favicons.php';
        $content = file_get_contents($path);
        $content = str_replace('namespace OfficialXVIID\CI4Favicons\Config', 'namespace Config', $content);
        $content = str_replace('extends BaseConfig', 'extends \OfficialXVIID\CI4Favicons\Config\Favicons', $content);
        $this->writeFile('Config/Favicons.php', $content);
    }

    /**
     * Write a file, catching any exceptions and showing a nicely formatted error.
     *
     * @param string $path
     * @param string $content
     */
    protected function writeFile(string $path, string $content)
    {
        $config = new Autoload();
        $appPath = $config->psr4[APP_NAMESPACE];
        $directory = dirname($appPath . $path);
        // Check Available Directory
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        // Config file already exists, do you want to replace it?
        if (file_exists($appPath . $path) && CLI::prompt(lang('Favicons.alreadyExistConfigFile'), [lang('Favicons.yes'), lang('Favicons.no')]) == lang('Favicons.no')) {
            // Cancelled
            CLI::error(lang('Favicons.cancelled'));
            exit();
        }

        try {
            write_file($appPath . $path, $content);
        } catch (\Exception $e) {
            $this->showError($e);
            exit();
        }

        $path = str_replace($appPath, '', $path);
        // Created path
        CLI::write(lang('Favicons.createdPath', [$path]));
    }
}
