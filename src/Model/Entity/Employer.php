<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employer Entity
 *
 * @property int $id
 * @property string $name
 * @property int $cuit
 * @property string $description
 * @property string $address
 * @property string $address_actual
 * @property \Cake\I18n\FrozenDate $initiation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Hiring[] $hirings
 * @property \App\Model\Entity\Paycheck[] $paychecks
 * @property \App\Model\Entity\Settlement[] $settlements
 */
class Employer extends Entity
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
        'cuit' => true,
        'description' => true,
        'address' => true,
        'address_actual' => true,
        'initiation' => true,
        'created' => true,
        'modified' => true,
        'hirings' => true,
        'paychecks' => true,
        'settlements' => true
    ];
}
