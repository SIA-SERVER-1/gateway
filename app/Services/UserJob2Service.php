<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class UserJob2Service
{
    use ConsumesExternalService;

    public $baseUri;

    // jobs
      public function obtainjob2()
    {
        return $this->performRequest('GET', '/userjob2');
    }
    public function showjob2($id)
    {
    return $this->performRequest('GET', "/userjob2/{$id}");
    }
}
