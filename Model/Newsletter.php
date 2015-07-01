<?php

/**
 *
 * Roadbees News Model
 *
 * the News model controlls all the datamanipulation for the news newsletter
 *
 * @copyright Copyright (c) 2011, Haithem bel haj <codebility.com>
 * @author Haithem bel haj <haythem.belhaj@gmail.com>
 * @link          http://roadbees.de
 * @since         Roadbees v 0.1
 */
// App::uses('AppModel','Model');
// class NewsletterAppModel extends AppModel {

// }

class Newsletter extends NewsletterAppModel {

    /**
    * app-wide  name
    *
    * @var array
    * @access public
    */
	
    public $name = "Newsletter";
    
    var $primaryKey = '_id';


  //  public $hasAndBelongsToMany = array('Campaign' => array('className' => 'Campaign'));
    
    /**
    * schema
    *
    * @var array
    * @access public
    */

  //   public $mongoSchema = array(
  //       'title' =>  array('type'=>'string'),
		// 'content'=> array('type'=>'string'),
  //       'campaigns' => array('type' => 'array'),
		// 'created'=> array('type'=>'datetime'),
		// 'modified'=> array('type'=>'datetime'),
  //       'published' => array('type' => 'tinyint')
  //   );
    
    
    var $validate = array(
		'title' => array(
		    'rule' => 'isUnique',
		    'message' => "Der Title ist schon vergeben"
		)
    );
    
    
    public function incrementCounter(){
        $counter=0;
    	$counter = $this->field("viewCounter");
        $this->saveField('viewCounter',$counter+1, true);
    }
//$this->decrease('viewCounter', 10);
    // public function beforeSave(){   
    //     return true;
    // }


    
 /**
 * Updates a specific field with a given value
 *
 * @param $field Field name to update
 * @param $value The step to use to increase the $field
 * @return mixed
 */
private function _change($field, $value, $sign) {
 
    $schema = $this->schema();
 
    if( ! isset( $schema[$field] ) ) {
        throw new Exception("No such field: " . $field, 1);
    }
 
    if( ! in_array( $sign, array('+', '-') ) ) {
        throw new Exception("Not a valid mathematic sign", 1);
    }
 
    $sql = "UPDATE `" . $this->table . "` SET `" . $field . "` = `" . $field . "` " . $sign . " ? WHERE `" . $this->primaryKey . "` = ? LIMIT 1";
    $result = $this->query($sql, array( $value, $this->id));
 
    return $result;
}
 
/**
 * Increase a specific $field with a given $value
 *
 * @param $field Field name to update
 * @param $value The step to use to increase the $field
 * @return mixed
 */
public function decrease($field, $value) {
 
    return $this->_change($field, $value, '-');
}
 
/**
 * Decrease a specific $field with a given $value
 *
 * @param $field Field name to update
 * @param $value The step to use to increase the $field
 * @return mixed
 */
public function increase($field, $value) {
 
    return $this->_change($field, $value, '+');
}
    
    
   
}
