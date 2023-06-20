<?php

namespace PlanetaDelEste\ApiAudits\Classes\Store\Audit;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithParam;
use PlanetaDelEste\ApiAudits\Models\Audit;

class ListByUserStore extends AbstractStoreWithParam
{
    protected static $instance;

    /**
     * @inheritDoc
     */
    protected function getIDListFromDB(): array
    {
        return Audit::where('user_id', $this->sValue)->lists('id');
    }
}
