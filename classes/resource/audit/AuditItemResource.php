<?php

namespace PlanetaDelEste\ApiAudits\Classes\Resource\Audit;

use PlanetaDelEste\ApiAudits\Classes\Item\AuditItem;
use PlanetaDelEste\ApiShopaholic\Classes\Resource\User\ItemResource;
use PlanetaDelEste\ApiToolbox\Classes\Resource\Base;
use PlanetaDelEste\ApiAudits\Plugin;

/**
 * Class ItemResource
 *
 * @mixin AuditItem
 * @package PlanetaDelEste\ApiAudits\Classes\Resource\Audit
 */
class AuditItemResource extends Base
{
    /**
     * @return array|void
     */
    public function getData(): array
    {
        return [
            'user' => $this->user ? ItemResource::make($this->user) : null
        ];
    }

    public function getDataKeys(): array
    {
        return [
            'id',
            'user_type',
            'user_id',
            'event',
            'auditable_type',
            'auditable_id',
            'old_values',
            'new_values',
            'url',
            'ip_address',
            'user_agent',
            'tags',
            'created_at',
            'updated_at',
            'user'
        ];
    }

    protected function getEvent(): string
    {
        // Paste below code in PlanetaDelEste\ApiAudits\Plugin class
        // const EVENT_ITEMRESOURCE_DATA = 'planetadeleste.apiaudits.resource.itemData';
        return Plugin::EVENT_ITEMRESOURCE_DATA . '.audit';
    }
}
