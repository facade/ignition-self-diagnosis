<?php

namespace Facade\SelfDiagnosis;

use Facade\Ignition\Tabs\Tab as BaseTab;

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
        return [
            'title' => $this->name(),
        ];
    }
}
