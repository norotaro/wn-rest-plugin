<?php

namespace Norotaro\Rest;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot()
    {
        \App::error(function (Exceptions\ApiException $apiException) {
            return [
                'code' => $apiException->getStatusCode(),
                'message' => $apiException->getMessage(),
            ];
        });
    }
}
