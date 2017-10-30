<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Cake\I18n\FrozenDate $birthday
 * @property int $dni
 * @property int $cuit
 * @property string $nationality
 *
 * @property \App\Model\Entity\Hiring[] $hirings
 * @property \App\Model\Entity\Paycheck[] $paychecks
 */
class Employee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address' => true,
        'birthday' => true,
        'dni' => true,
        'cuit' => true,
        'nationality' => true,
        'hirings' => true,
        'paychecks' => true
    ];
}
