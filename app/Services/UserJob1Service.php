<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class UserJob1Service
{
    use ConsumesExternalService;

    public $baseUri;

    // jobs
      public function obtainjob1()
    {
        return $this->performRequest('GET', '/userjob1');
    }
    public function showjob1($id)
    {
    return $this->performRequest('GET', "/userjob1/{$id}");
    }
}
