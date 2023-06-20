<?php namespace PlanetaDelEste\ApiAudits\Classes\Resource\Audit;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class IndexCollection
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Resource\Audit
 */
class AuditIndexCollection extends ResourceCollection
{
    public $collects = AuditShowResource::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
