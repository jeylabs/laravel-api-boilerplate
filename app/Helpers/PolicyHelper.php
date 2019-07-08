<?php


namespace App\Helpers;


/**
 * Class PolicyHelper
 * @package App\Helpers
 */
class PolicyHelper
{
    /**
     * Load the application polices from Policies directory
     * @return array
     */
    public static function getPolices(): array
    {
        $polices = [];
        $policyDir = app_path('Policies');
        $policyNameSpace = 'App\Policies';
        // Get all sub dir of polices dir ana map polices and model
        $policyGroupDirectories = glob($policyDir . '/*', GLOB_ONLYDIR);
        foreach ($policyGroupDirectories as $policyGroupDir) {
            $groupName = basename($policyGroupDir);
            foreach (scandir($policyGroupDir) as $policyFiles) {
                if (!strpos($policyFiles, '.php')) continue;
                $policy = str_replace('.php', '', $policyFiles);
                $policy = $policyNameSpace . '\\' . $groupName . '\\' . $policy;
                $policyObject = new $policy();
                $polices[$policyObject->model] = $policy;
            }
        }
        return $polices;
    }
}