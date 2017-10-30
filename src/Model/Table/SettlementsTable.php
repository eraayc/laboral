<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settlements Model
 *
 * @property \App\Model\Table\PeriodsTable|\Cake\ORM\Association\BelongsTo $Periods
 * @property \App\Model\Table\EmployersTable|\Cake\ORM\Association\BelongsTo $Employers
 * @property \App\Model\Table\PaychecksTable|\Cake\ORM\Association\HasMany $Paychecks
 *
 * @method \App\Model\Entity\Settlement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Settlement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Settlement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Settlement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Settlement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Settlement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Settlement findOrCreate($search, callable $callback = null, $options = [])
 */
class SettlementsTable extends Table
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

        $this->setTable('settlements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Periods', [
            'foreignKey' => 'period_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Paychecks', [
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
            ->scalar('description')
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['period_id'], 'Periods'));
        $rules->add($rules->existsIn(['employer_id'], 'Employers'));

        return $rules;
    }
}
