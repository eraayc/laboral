<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Settlement Entity
 *
 * @property int $id
 * @property int $period_id
 * @property string $description
 * @property int $employer_id
 *
 * @property \App\Model\Entity\Period $period
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\Paycheck[] $paychecks
 */
class Settlement extends Entity
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
        'period_id' => true,
        'description' => true,
        'employer_id' => true,
        'period' => true,
        'employer' => true,
        'paychecks' => true
    ];
}
