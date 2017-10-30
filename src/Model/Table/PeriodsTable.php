<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periods Model
 *
 * @property \App\Model\Table\PaychecksTable|\Cake\ORM\Association\HasMany $Paychecks
 * @property \App\Model\Table\SettlementsTable|\Cake\ORM\Association\HasMany $Settlements
 *
 * @method \App\Model\Entity\Period get($primaryKey, $options = [])
 * @method \App\Model\Entity\Period newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Period[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Period|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Period patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Period[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Period findOrCreate($search, callable $callback = null, $options = [])
 */
class PeriodsTable extends Table
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

        $this->setTable('periods');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Paychecks', [
            'foreignKey' => 'period_id'
        ]);
        $this->hasMany('Settlements', [
            'foreignKey' => 'period_id'
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
            ->date('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->date('end')
            ->requirePresence('end', 'create')
            ->notEmpty('end');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
