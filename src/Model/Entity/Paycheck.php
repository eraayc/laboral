<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paycheck Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $employer_id
 * @property int $period_id
 * @property int $settlement_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $compensations
 * @property string $reductions
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\Period $period
 * @property \App\Model\Entity\Settlement $settlement
 */
class Paycheck extends Entity
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
        'employee_id' => true,
        'employer_id' => true,
        'period_id' => true,
        'settlement_id' => true,
        'created' => true,
        'modified' => true,
        'compensations' => true,
        'reductions' => true,
        'employee' => true,
        'employer' => true,
        'period' => true,
        'settlement' => true
    ];
}
