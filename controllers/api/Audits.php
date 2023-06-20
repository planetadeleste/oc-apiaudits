<?php namespace PlanetaDelEste\ApiAudits\Controllers\Api;

use PlanetaDelEste\ApiAudits\Classes\Store\AuditListStore;
use PlanetaDelEste\ApiToolbox\Classes\Api\Base;
use PlanetaDelEste\ApiAudits\Classes\Resource\Audit\AuditIndexCollection;
use PlanetaDelEste\ApiAudits\Classes\Resource\Audit\AuditListCollection;
use PlanetaDelEste\ApiAudits\Classes\Resource\Audit\AuditShowResource;
use PlanetaDelEste\ApiAudits\Models\Audit;

/**
 * Class Audits
 *
 * @package PlanetaDelEste\ApiAudits\Controllers\Api
 */
class Audits extends Base
{
    public function getModelClass(): string
    {
        return Audit::class;
    }

    public function getSortColumn(): string
    {
        return AuditListStore::SORT_CREATED_AT_DESC;
    }

    public function getShowResource(): string
    {
        return AuditShowResource::class;
    }

    public function getIndexResource(): string
    {
        return AuditIndexCollection::class;
    }

    public function getListResource(): string
    {
        return AuditListCollection::class;
    }
}
