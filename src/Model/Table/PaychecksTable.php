<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paychecks Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\EmployersTable|\Cake\ORM\Association\BelongsTo $Employers
 * @property \App\Model\Table\PeriodsTable|\Cake\ORM\Association\BelongsTo $Periods
 * @property \App\Model\Table\SettlementsTable|\Cake\ORM\Association\BelongsTo $Settlements
 *
 * @method \App\Model\Entity\Paycheck get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paycheck newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paycheck[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paycheck|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paycheck patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paycheck[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paycheck findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaychecksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('paychecks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Periods', [
            'foreignKey' => 'period_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Settlements', [
            'foreignKey' => 'settlement_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('compensations')
            ->allowEmpty('compensations');

        $validator
            ->scalar('reductions')
            ->allowEmpty('reductions');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        $rules->add($rules->existsIn(['employer_id'], 'Employers'));
        $rules->add($rules->existsIn(['period_id'], 'Periods'));
        $rules->add($rules->existsIn(['settlement_id'], 'Settlements'));

        return $rules;
    }
}
