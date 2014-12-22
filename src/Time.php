<?php

namespace hemio\html;

/**
 * The time element represents its contents, along with a machine-readable form
 * of those contents in the datetime attribute. 
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/text-level-semantics.html#the-time-element
 */
class Time
        extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    /**
     *
     * @var \DateTime
     */
    protected $time;

    /**
     * @url http://php.net/manual/en/function.strftime.php
     * @var string 
     */
    protected $timeFormat;

    public static function tagName() {
        return 'time';
    }

    public function __construct(\DateTime $time = null, $format = '%x') {
        $this->time = $time;
        $this->timeFormat = $format;

        $this['_TIME'] = new String(strftime($this->timeFormat,
                        $this->time->getTimestamp()));
    }

}
