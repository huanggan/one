<?php
namespace Hg\Package;
use Hg\Package\What;
use Hg\Oo\Test;
class One{
    protected $otherName;
//    public function __construct(Test $a) {
//        $this->otherName = $a;
//    }
    public function __toString() {
        return 'this is '.__CLASS__;
    }
    public function getOthers(){
        return new Test();
    }
	public function getWhat(){
		return new What();
	}
    
}
