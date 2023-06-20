<?php

namespace PlanetaDelEste\ApiAudits\Classes\Store\Audit;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithParam;
use PlanetaDelEste\ApiAudits\Models\Audit;

class ListByAuditableStore extends AbstractStoreWithParam
{
    protected static $instance;

    /**
     * @inheritDoc
     */
    protected function getIDListFromDB(): array
    {
        return Audit::where('auditable_type', $this->sValue)->lists('id');
    }
}
