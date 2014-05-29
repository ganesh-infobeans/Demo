<?php
/**
***
 * Text Heighlight helper 
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class TextHighlightHelper extends Helper {
    
    /**
     * convert string in to bold string from fromstring 
     * @param string $fromString
     * @param string $string
     * @return type
     */
    public function highlightText($fromString,$string) {
       	$result=str_replace($string, "<strong style='color:red'>".$string."</strong>", $fromString);
        return $result;
    }
    
    /**
     * 
     * @param string $fromString
     * @param string $string
     */
    public function italicText ($fromString,$string) {
        
    }
}
