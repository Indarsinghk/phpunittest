<?php
namespace CricBuzz\Cricket;
Class Account
{
    public function add($first, $last) {
        
        if(!$this->isInteger($first)) {
            throw new \InvalidArgumentException('Must integer value.');
        }
        
        if(!$this->isInteger($last)) {
            throw new \InvalidArgumentException('Must integer value.');
        }
        
        $string = '';
        for($i = $first; $i< $last; $i++) {
            if($i % 3 == 0) {
                $string .= "indar"."<br />";
            }elseif ($i % 5 == 0) {
                $string .= "hi"."<br />";
            } else {
                $string .= $i;
            }
        }
        return $string;
    }
    
    /**
     * Indicates if a value is considered "integer"
     *
     * @param mixed $integer A value to check
     *
     * @return Boolean
     */
    private function isInteger($integer)
    {
        if (is_numeric($integer) && ($integer > 0 || in_array($integer, array(0, '0'), true))
            && !is_float($integer)) {
            return true;
        }
        return false;
    }
}