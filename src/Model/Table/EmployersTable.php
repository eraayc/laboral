<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employers Model
 *
 * @property \App\Model\Table\HiringsTable|\Cake\ORM\Association\HasMany $Hirings
 * @property \App\Model\Table\PaychecksTable|\Cake\ORM\Association\HasMany $Paychecks
 * @property \App\Model\Table\SettlementsTable|\Cake\ORM\Association\HasMany $Settlements
 *
 * @method \App\Model\Entity\Employer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployersTable extends Table
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

        $this->setTable('employers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Hirings', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Paychecks', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Settlements', [
            'foreignKey' => 'employer_id'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('cuit')
            ->requirePresence('cuit', 'create')
            ->notEmpty('cuit');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('address')
            ->allowEmpty('address');

        $validator
            ->scalar('address_actual')
            ->allowEmpty('address_actual');

        $validator
            ->date('initiation')
            ->requirePresence('initiation', 'create')
            ->notEmpty('initiation');

        return $validator;
    }
}
