<?php

namespace PlanetaDelEste\ApiAudits;

use Event;
use PlanetaDelEste\ApiAudits\Classes\event\ApiAuditsHandler;
use PlanetaDelEste\ApiAudits\Classes\Event\Audit\AuditModelHandler;
use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package PlanetaDelEste\ApiAudits
 */
class Plugin extends PluginBase
{
    public const EVENT_ITEMRESOURCE_DATA = 'planetadeleste.apiaudits.resource.itemData';
    public const API_ROUTES                 = '/planetadeleste/apiaudits/routes/';

    public function boot()
    {
        $this->addEventListener();
    }

    protected function addEventListener()
    {
        $arClasses = [
            AuditModelHandler::class,
            ApiAuditsHandler::class,
        ];

        array_walk($arClasses, [Event::class, 'subscribe']);
    }
}
