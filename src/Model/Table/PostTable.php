<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Post Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Content
 * @property \Cake\ORM\Association\BelongsToMany $Feedback
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 */
class PostTable extends Table
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

        $this->table('post');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Content', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'content_id',
            'joinTable' => 'post_content'
        ]);
        $this->belongsToMany('Feedback', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'feedback_id',
            'joinTable' => 'post_feedback'
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
            ->dateTime('time_posted')
            ->requirePresence('time_posted', 'create')
            ->notEmpty('time_posted');

        $validator
            ->integer('character_length')
            ->requirePresence('character_length', 'create')
            ->notEmpty('character_length');

        $validator
            ->integer('business')
            ->requirePresence('business', 'create')
            ->notEmpty('business');

        return $validator;
    }
}
