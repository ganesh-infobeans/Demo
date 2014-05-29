<?php


App::uses('ModelBehavior', 'Model');

/**
 * isExists Behavior.
 *  Checks record exists in the db 
 */
class IsExistsBehavior extends ModelBehavior {




	public function setup(Model $Model, $config = array()) {

	}


	public function afterSave(Model $Model, $created, $options = array()) {
		
	}


	public function beforeFind(Model $Model, $query) {
		
	}
        
/**
 * check method which checks if the record with same name exists in db.
 * @param Model $Model
 * @param string $name
 * 
 * @return boolean
 */        
        public function  check(Model $Model, $name) {
            $records=$Model->find('count',array(
                'conditions'=>array($Model->name.'.name' =>$name)));
            if($records > 0)  
                return true;
            return false;
        }

/**
 * Stores the record about to be deleted.
 *
 * This is used to delete child nodes in the afterDelete.
 *
 * @param Model $Model Model instance
 * @param boolean $cascade
 * @return boolean
 */
	public function beforeDelete(Model $Model, $cascade = true) {

	}
}
