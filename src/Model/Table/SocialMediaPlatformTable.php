<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialMediaPlatform Model
 *
 * @method \App\Model\Entity\SocialMediaPlatform get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialMediaPlatform findOrCreate($search, callable $callback = null, $options = [])
 */
class SocialMediaPlatformTable extends Table
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

        $this->table('social_media_platform');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
