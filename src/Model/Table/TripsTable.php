<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trips Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Trip newEmptyEntity()
 * @method \App\Model\Entity\Trip newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Trip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trip findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Trip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trip[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trip|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trip saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trip[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trip[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trip[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Trip[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TripsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('trips');
        $this->setDisplayField('name');
        $this->setPrimaryKey('trip_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->requirePresence('user_id', 'create')
            ->notEmptyString('user_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 150)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('url_maps')
            ->maxLength('url_maps', 150)
            ->requirePresence('url_maps', 'create')
            ->notEmptyString('url_maps');

        $validator
            ->date('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmptyDate('date_from');

        $validator
            ->date('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmptyDate('date_to');

        $validator
            ->dateTime('creation_date')
            ->notEmptyDateTime('creation_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
