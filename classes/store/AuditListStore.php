<?php

namespace PlanetaDelEste\ApiAudits\Classes\Store;

use Lovata\Toolbox\Classes\Store\AbstractListStore;
use PlanetaDelEste\ApiAudits\Classes\Store\Audit\ListByAuditableStore;
use PlanetaDelEste\ApiAudits\Classes\Store\Audit\ListByUserStore;
use PlanetaDelEste\ApiAudits\Classes\Store\Audit\SortingListStore;

/**
 * Class AuditListStore
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Store
 *
 * @property SortingListStore     $sorting
 * @property ListByUserStore      $user
 * @property ListByAuditableStore $auditable
 */
class AuditListStore extends AbstractListStore
{
    public const SORT_CREATED_AT_ASC  = 'created_at|asc';
    public const SORT_CREATED_AT_DESC = 'created_at|desc';

    protected static $instance;

    /**
     * Init store method
     */
    protected function init()
    {
        $this->addToStoreList('sorting', SortingListStore::class);
        $this->addToStoreList('user', ListByUserStore::class);
        $this->addToStoreList('auditable', ListByAuditableStore::class);
    }
}
