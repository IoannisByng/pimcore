<?php 

/** Generated at 2015-07-24T11:18:28+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Story getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Story getByBody ($value, $limit = 0) 
*/

class Story extends Concrete {

public $o_classId = 1;
public $o_className = "Story";
public $title;
public $body;


/**
* @param array $values
* @return \Pimcore\Model\Object\Story
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get title - title
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("title"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->title;
	return $data;
}

/**
* Set title - title
* @param string $title
* @return \Pimcore\Model\Object\Story
*/
public function setTitle ($title) {
	$this->title = $title;
	return $this;
}

/**
* Get body - body
* @return string
*/
public function getBody () {
	$preValue = $this->preGetValue("body"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->body;
	return $data;
}

/**
* Set body - body
* @param string $body
* @return \Pimcore\Model\Object\Story
*/
public function setBody ($body) {
	$this->body = $body;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

