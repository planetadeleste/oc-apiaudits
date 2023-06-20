<?php

namespace PlanetaDelEste\ApiAudits\Classes\Collection;

use Lovata\Toolbox\Classes\Collection\ElementCollection;
use PlanetaDelEste\ApiAudits\Classes\Item\AuditItem;
use PlanetaDelEste\ApiAudits\Classes\Store\AuditListStore;

/**
 * Class AuditCollection
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Collection
 */
class AuditCollection extends ElementCollection
{
    public const ITEM_CLASS = AuditItem::class;

    /**
     * Sort list by
     *
     * @param string $sSorting
     * @return $this
     */
    public function sort(string $sSorting): self
    {
        $arResultIDList = AuditListStore::instance()->sorting->get($sSorting);

        return $this->applySorting($arResultIDList);
    }

    /**
     * @param int|string $iUserId
     * @return self
     */
    public function user($iUserId): self
    {
        $arResultIDList = AuditListStore::instance()->user->get($iUserId);

        return $this->intersect($arResultIDList);
    }

    /**
     * @param string $sClass
     * @return self
     */
    public function auditable(string $sClass): self
    {
        $arResultIDList = AuditListStore::instance()->auditable->get($sClass);

        return $this->intersect($arResultIDList);
    }
}
