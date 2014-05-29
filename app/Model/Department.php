<?php
App::uses('AppModel', 'Model');
/**
 * Department Model
 *
 * @property User $User
 */
class Department extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'department_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
/*  
 * 
 * Include isExists behaviour to check duplicate record 

 *  */
        var $actsAs = array('IsExists');  

        public function saveDepartment($data) {
            if(!$this->check($data['Department']['name'])) {
                $this->create();
                  if ($this->save($data)) {
                   return true;
                  } else {
                    return false;
                 }  
            }
            return false;
        }

}
