<?php
namespace Hg\Package;
use Hg\oo\Test;
class One{
    protected $otherName;
//    public function __construct(Test $a) {
//        $this->otherName = $a;
//    }
    public function __toString() {
        echo 'this is '.__CLASS__;
    }
    public function getOthers(){
        return Test;
    }

    
}
