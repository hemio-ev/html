<?php

namespace hemio\html\Trait_;

/**
 *
 */
trait AppendageMaintainance {

    /**
     * @var array
     */
    protected $arrInheritableAppendages = [];

    /**
     * List of appendages that are explicitly defined on this object. They
     * are not overwritten from appendages from object that are higher
     * in the hierarchy.
     * 
     * @var array
     */
    protected $arrIndividualAppendages = [];

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    public function addInheritableAppendage($key, $appendage) {
        $this->arrIndividualAppendages[$key] = true;
        $this->storeInheritableAppendage($key, $appendage);
    }

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    public function leaveInheritableAppendage($key, $appendage) {
        if (!$this->appendageIsIndividual($key)) {
            $this->storeInheritableAppendage($key, $appendage);
        }
    }

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    private function storeInheritableAppendage($key, $appendage) {
        $this->arrInheritableAppendages[$key] = $appendage;

        if ($this instanceof \hemio\html\Interface_\MaintainsChilds) {
            foreach ($this as $child) {
                if ($child instanceof \hemio\html\Interface_\MaintainsAppendages) {
                    $child->leaveInheritableAppendage($key, $appendage);
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

    /**
     * 
     * @param string $key
     * @return boolean
     */
    public function appendageIsIndividual($key) {
        return array_key_exists($key, $this->arrIndividualAppendages);
    }

    /**
     * @return array All appendages with keys
     */
    public function getInheritableAppendages() {
        return $this->arrInheritableAppendages;
    }

}
