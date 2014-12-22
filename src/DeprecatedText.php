<?php

namespace hemio\html;

/**
 * Text is a <code><,></code> free class
 */
class DeprecatedText extends String {

    protected $arrVars = array();

    function __construct($strContent, array $arrVars = array()) {
        parent::__construct($strContent);
        $this->arrVars = $arrVars;
    }

    function __toString() {
        $strContent = $this->strContent;

        foreach ($this->arrVars as $strVarName => $strVarValue)
            $strContent =
                    str_replace('%' . $strVarName . '%', $strVarValue,
                                $strContent);

        $strContent = htmlspecialchars($strContent);

        $strContent =
                preg_replace('/\/\/(.*)\/\//', '<emph>\1</emph>', $strContent);
        $strContent =
                preg_replace('/\*\*(.*)\*\*/', '<strong>\1</strong>',
                             $strContent);

        return $strContent;
    }

}
