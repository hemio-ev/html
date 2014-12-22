<?php

namespace hemio\html;

/**
 * The <code>article</code> element represents a section of content that forms an
  independent part of a document or site; for example, a magazine or
  newspaper article, or a blog entry.
 * 
 * @since version 1.0
 * @url http://www.w3.org/TR/html5/sections.html#the-article-element
 */
class Article extends Abstract_\ElementContent {

    use Trait_\DefaultElementContent;

    public static function tagName() {
        return 'article';
    }

    public function blnIsBlock() {
        return true;
    }

}
