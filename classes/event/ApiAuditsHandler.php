<?php

namespace PlanetaDelEste\ApiAudits\Classes\event;

use October\Rain\Events\Dispatcher;
use PlanetaDelEste\ApiAudits\Classes\Collection\AuditCollection;
use PlanetaDelEste\ApiAudits\Models\Audit;
use PlanetaDelEste\ApiToolbox\Plugin;

class ApiAuditsHandler
{
    public function subscribe(Dispatcher $obEvent)
    {
        $obEvent->listen(
            Plugin::EVENT_API_ADD_COLLECTION,
            function () {
                return $this->addCollections();
            }
        );
    }

    protected function addCollections(): array
    {
        return [
            Audit::class => AuditCollection::class
        ];
    }
}
