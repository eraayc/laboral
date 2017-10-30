<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Period Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $start
 * @property \Cake\I18n\FrozenDate $end
 * @property string $name
 *
 * @property \App\Model\Entity\Paycheck[] $paychecks
 * @property \App\Model\Entity\Settlement[] $settlements
 */
class Period extends Entity
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
        'start' => true,
        'end' => true,
        'name' => true,
        'paychecks' => true,
        'settlements' => true
    ];
}
