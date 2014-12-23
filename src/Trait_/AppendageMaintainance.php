<?php

namespace hemio\html\Trait_;

/**
 *
 */
trait AppendageMaintainance {

    /**
     * @var array
     * @todo protected
     */
    public $arrInheritableAppendages = [];

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    public function addInheritableAppendage($key, $appendage) {
        $this->arrInheritableAppendages[$key] = $appendage;

        if ($this instanceof \hemio\html\Interface_\MaintainsChilds) {
            foreach ($this as $child) {
                if ($child instanceof \hemio\html\Interface_\MaintainsAppendages) {
                    $child->addInheritableAppendage($key, $appendage);
                }
            }
        }
    }

    /**
     * 
     * @param string $key
     * @return null|mixed
     */
    public function getInheritableAppendage($key) {
        if (array_key_exists($key, $this->arrInheritableAppendages))
            return $this->arrInheritableAppendages[$key];
        else
            return null;
    }

    /**
     * 
     * @param string $key
     * @return boolean
     */
    public function existsInheritableAppendage($key) {
        return $this->getInheritableAppendage($key) !== null;
    }

}
