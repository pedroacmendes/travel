<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
* User Entity
*
* @property int $id
* @property string $name
* @property string $email
* @property string $password
* @property string $phone
* @property string $city
* @property int $age
* @property \Cake\I18n\FrozenTime $creation_date
*/
class User extends Entity
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
        'name' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'city' => true,
        'age' => true,
        'creation_date' => true,
    ];

    /**
    * Fields that are excluded from JSON versions of the entity.
    *
    * @var array<string>
    */
    protected $_hidden = [
        'password',
    ];

    // Automatically hash passwords when they are changed.
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
