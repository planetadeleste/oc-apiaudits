<?php

namespace PlanetaDelEste\ApiAudits;

use Event;
use PlanetaDelEste\ApiAudits\Classes\Event\Audit\AuditModelHandler;
use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package PlanetaDelEste\ApiAudits
 */
class Plugin extends PluginBase
{
    public function boot()
    {
        $this->addEventListener();
    }

    protected function addEventListener()
    {
        $arClasses = [
            AuditModelHandler::class,
        ];
        array_walk($arClasses, [Event::class, 'subscribe']);
    }
}
