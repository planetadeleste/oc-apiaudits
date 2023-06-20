<?php

namespace PlanetaDelEste\ApiAudits\Models;

use Carbon\Carbon;
use Eloquent;
use Lovata\Buddies\Models\User;
use Lovata\Toolbox\Traits\Helpers\TraitCached;
use Model;
use October\Rain\Database\Builder;
use October\Rain\Database\Relations\MorphTo;

/**
 * Class Audit
 *
 * @package PlanetaDelEste\ApiAudits\Models
 *
 * @mixin Builder
 * @mixin Eloquent
 *
 * @property int                           $id
 * @property string                        $user_type
 * @property int                           $user_id
 * @property string                        $event
 * @property string                        $auditable_type
 * @property int                           $auditable_id
 * @property array                         $old_values
 * @property array                         $new_values
 * @property string                        $url
 * @property string                        $ip_address
 * @property string                        $user_agent
 * @property string                        $tags
 * @property Carbon                        $created_at
 * @property Carbon                        $updated_at
 *
 * Accessors
 * @property \OwenIt\Auditing\Models\Audit $last_audit
 *
 * @method static MorphTo|Audit auditable()
 * @method static MorphTo|Audit user()
 */
class Audit extends Model implements \OwenIt\Auditing\Contracts\Audit
{
    use TraitCached;
    use \OwenIt\Auditing\Audit;

    /** @var array */
    public $jsonable = ['old_values', 'new_values'];

    /** @var array */
    public $fillable = [
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
    ];

    /** @var array */
    public $cached = [
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
    ];

    /** @var array */
    public $dates = [
        'created_at',
        'updated_at',
    ];

    /** @var array */
    public $belongsTo = [
        'user' => [User::class]
    ];

    public $morphTo = [
        'user'      => [],
        'auditable' => []
    ];

    public function getTable(): string
    {
        return config('audit.drivers.database.table', parent::getTable());
    }
}
