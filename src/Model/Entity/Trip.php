<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trip Entity
 *
 * @property int $trip_id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $url_maps
 * @property \Cake\I18n\FrozenDate $date_from
 * @property \Cake\I18n\FrozenDate $date_to
 * @property \Cake\I18n\FrozenTime $creation_date
 *
 * @property \App\Model\Entity\User $user
 */
class Trip extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'description' => true,
        'url_maps' => true,
        'date_from' => true,
        'date_to' => true,
        'creation_date' => true,
        'user' => true,
    ];
}
