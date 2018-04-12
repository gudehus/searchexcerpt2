<?php

namespace gudehus\searchexcerpt\twigextensions;

use Craft;
use craft\helpers\Template;

class SearchExcerptTwigExtension extends \Twig_Extension
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'searchExcerpt';
    }

    /**
     * Makes the filters available to the template context
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('searchExcerpt', [$this, 'searchExcerpt'])
        ];
    }

    public function getFilters()
    {
        $returnArray = array();
        $methods = array(
            'searchExcerpt',
        );

        foreach ($methods as $methodName) {
            $returnArray[$methodName] = new \Twig_SimpleFilter($methodName, array($this, $methodName));
        }

        return $returnArray;
    }

    public function searchExcerpt($text, $term, $padding=20, $class='highlight')
    {        
    	$start = max(0, stripos($text, $term) - $padding);
    	$end = min(strlen($text), $start + strlen($term) + $padding);
    	
    	$excerpt = substr($text, $start, $padding * 2 + strlen($term));

    	if ($start != 0)
    		$excerpt = '… ' . preg_replace('/^\S*\s/', '', $excerpt);
    	
    	if ($end != strlen($text))
    		$excerpt = preg_replace('/\s\S*$/', '', $excerpt) . ' …';
    	
    	
		$excerpt = preg_replace("/\b(".$term.")\b/i", "<span class='" . $class . "'>$1</span>", $excerpt);

		return Template::raw($excerpt);
    }


}
