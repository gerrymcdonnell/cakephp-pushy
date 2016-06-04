<?php
namespace Gerrymcdonnell\Pushy\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Gerrymcdonnell\Pushy\Model\Entity\Pushymenu;

/**
 * Pushymenus Model
 *
 * @property \Cake\ORM\Association\HasMany $PushymenusItems
 */
class PushymenusTable extends Table
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

        $this->table('pushymenus');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PushymenusItems', [
            'foreignKey' => 'pushymenu_id',
            'className' => 'Gerrymcdonnell/Pushy.PushymenusItems'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('controller', 'create')
            ->notEmpty('controller');

        $validator
            ->requirePresence('action', 'create')
            ->notEmpty('action');

        $validator
            ->requirePresence('plugin', 'create')
            ->notEmpty('plugin');

        return $validator;
    }
}
