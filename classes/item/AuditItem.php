<?php

namespace PlanetaDelEste\ApiAudits\Classes\Item;

use Carbon\Carbon;
use Lovata\Buddies\Classes\Item\UserItem;
use Lovata\Toolbox\Classes\Item\ElementItem;
use PlanetaDelEste\ApiAudits\Models\Audit;

/**
 * Class AuditItem
 *
 * @package PlanetaDelEste\ApiAudits\Classes\Item
 *
 * @property int      $id
 * @property string   $user_type
 * @property int      $user_id
 * @property string   $event
 * @property string   $auditable_type
 * @property int      $auditable_id
 * @property array    $old_values
 * @property array    $new_values
 * @property string   $url
 * @property string   $ip_address
 * @property string   $user_agent
 * @property string   $tags
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 *
 * @property UserItem $user
 */
class AuditItem extends ElementItem
{
    public const MODEL_CLASS = Audit::class;

    /** @var Audit */
    protected $obElement = null;

    public $arRelationList = [
        'user' => [
            'class' => UserItem::class,
            'field' => 'user_id'
        ]
    ];
}
