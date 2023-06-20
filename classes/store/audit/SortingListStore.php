<?php

namespace PlanetaDelEste\ApiAudits\Classes\Store\Audit;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithParam;
use PlanetaDelEste\ApiAudits\Models\Audit;
use PlanetaDelEste\ApiAudits\Classes\Store\AuditListStore;
use PlanetaDelEste\ApiToolbox\Traits\Store\SortingListTrait;

/**
 * Class SortingListStore
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Store\Audit
 */
class SortingListStore extends AbstractStoreWithParam
{
    use SortingListTrait;

    protected static $instance;

    public $arListFromDB = ['created_at'];

    /**
     * @inheritDoc
     */
    protected function getModelClass(): string
    {
        return Audit::class;
    }
}
