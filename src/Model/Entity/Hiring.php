<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hiring Entity
 *
 * @property int $id
 * @property int $employer_id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenDate $start
 * @property \Cake\I18n\FrozenDate $end
 * @property string $description
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\Employee $employee
 */
class Hiring extends Entity
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
        'employer_id' => true,
        'employee_id' => true,
        'start' => true,
        'end' => true,
        'description' => true,
        'employer' => true,
        'employee' => true
    ];
}
