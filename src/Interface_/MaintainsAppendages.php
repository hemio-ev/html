<?php

namespace hemio\html\Interface_;

/**
 * Things that can maintain abritary appendages stored under a keyword
 */
interface MaintainsAppendages {

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    public function addInheritableAppendage($key, $appendage);

    /**
     * 
     * @param string $key
     * @param mixed $appendage
     */
    public function leaveInheritableAppendage($key, $appendage);

    /**
     * 
     * @param string $key
     * @return mixed Inherited Appendage
     */
    public function getInheritableAppendage($key);

    /**
     * 
     * @param string $key
     * @return boolean Existance of appendage
     */
    public function existsInheritableAppendage($key);

    /**
     * @return array All appendages with their keys
     */
    public function getInheritableAppendages();

    /**
     * 
     * @param string $key
     * @return boolean
     */
    public function appendageIsIndividual($key);
}
