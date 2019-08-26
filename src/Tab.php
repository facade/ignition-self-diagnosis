<?php

namespace Facade\SelfDiagnosis;

use Facade\Ignition\Tabs\Tab as BaseTab;
use BeyondCode\SelfDiagnosis\Checks\Check;

class Tab extends BaseTab
{
    public function name(): string
    {
        return 'Self Diagnosis';
    }

    public function component(): string
    {
        return 'ignition-self-diagnosis';
    }

    public function registerAssets()
    {
        $this->script('ignition-self-diagnosis', __DIR__.'/../dist/js/tab.js');
    }

    public function meta(): array
    {
        $environment = app()->environment();
        $environmentChecks = config('self-diagnosis.environment_checks.' . $environment, []);

        if (empty($environmentChecks) && array_key_exists($environment, config('self-diagnosis.environment_aliases'))) {
            $environment = config('self-diagnosis.environment_aliases.' . $environment);
            $environmentChecks = config('self-diagnosis.environment_checks.' . $environment, []);
        }

        $this->runChecks(config('self-diagnosis.checks', []));

        return [
            'generic_checks' => $this->runChecks(config('self-diagnosis.checks', [])),
            'env_checks' => $this->runChecks($environmentChecks),
        ];
    }

    protected function runChecks(array $checks)
    {
        $checkResults = [];

        foreach ($checks as $check => $config) {
            if (is_numeric($check)) {
                $check = $config;
                $config = [];
            }

            $checkClass = app($check);

            $checkResults[] = $this->runCheck($checkClass, $config);
        }

        return $checkResults;
    }

    protected function runCheck(Check $check, array $config)
    {
        return [
            'name' => $check->name($config),
            'result' => $check->check($config),
            'message' => $check->message($config)
        ];
    }
}
