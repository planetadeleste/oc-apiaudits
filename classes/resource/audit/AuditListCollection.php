<?php namespace PlanetaDelEste\ApiAudits\Classes\Resource\Audit;

/**
 * Class ListCollection
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Resource\Audit
 */
class AuditListCollection extends AuditIndexCollection
{
    public $collects = AuditItemResource::class;
}
