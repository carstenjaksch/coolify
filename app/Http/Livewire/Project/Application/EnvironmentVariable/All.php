<?php

namespace App\Http\Livewire\Project\Application\EnvironmentVariable;

use App\Models\Application;
use Livewire\Component;

class All extends Component
{
    public Application $application;
    protected $listeners = ['refreshEnvs'];
    public function refreshEnvs()
    {
        $this->application->refresh();
    }
}
