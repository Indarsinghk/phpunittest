<?php
use CricBuzz\Cricket\Account;

require_once ('PHPUnit/Framework/TestCase.php');

Class AccountTest extends \PHPunit_Framework_TestCase {
    
    /**
     * 
     * @dataProvider validData
     */
    public function testAdd($first, $last) {
        $accountObj = new Account();
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
        $this->assertSame($string, $accountObj->add($first, $last));
        
    }
    
    public function validData() {
        return array(
            array(1, 50),
            array(1, 60),
            array(1, 90)
        );
    }
    
    /**
     * 
     * @dataProvider invalidData
     */
    public function testAddWithInvalidData($first, $last) {
        $accountObj = new Account();
        try{
            $accountObj->add($first, $last);
        } catch (\InvalidArgumentException $e) {
            return true;
        }
        $this->fail();
    }
    
    public function invalidData() {
        return array(
            array('', 50),
            array(NULL, 60),
            array(array(), 90),
            array(true, 90),
            array(1, true),
            array(1, array()),
            array(1, ''),
        );
    }
}