<?php

namespace PlanetaDelEste\ApiAudits\Classes\Event\Audit;

use Lovata\Toolbox\Classes\Event\ModelHandler;
use PlanetaDelEste\ApiAudits\Models\Audit;
use PlanetaDelEste\ApiAudits\Classes\Item\AuditItem;
use PlanetaDelEste\ApiAudits\Classes\Store\AuditListStore;
use PlanetaDelEste\ApiToolbox\Traits\Event\ModelHandlerTrait;

/**
 * Class AuditModelHandler
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Event\Audit
 */
class AuditModelHandler extends ModelHandler
{
    use ModelHandlerTrait;

    /** @var Audit */
    protected $obElement;

    /**
     * Get model class name
     *
     * @return string
     */
    protected function getModelClass(): string
    {
        return Audit::class;
    }

    /**
     * Get item class name
     *
     * @return string
     */
    protected function getItemClass(): string
    {
        return AuditItem::class;
    }

    /**
     * After create event handler
     */
    protected function afterCreate()
    {
        parent::afterCreate();

        $this->clearCache();
    }

    /**
     * After save event handler
     */
    protected function afterSave()
    {
        parent::afterSave();

        $this->clearCache();
    }

    /**
     * After delete event handler
     */
    protected function afterDelete()
    {
        parent::afterDelete();

        $this->clearCache();
    }

    /**
     * Clear cache by created_at
     */
    protected function clearCache()
    {
        $this->clearSorting(['created_at']);
        $this->clearCacheFields(['user', 'auditable']);
    }

    protected function getStoreClass(): string
    {
        return AuditListStore::class;
    }
}
