<?php
namespace Hg\Package;
use Hg\Package\What\What;

class One{
    protected $otherName;
	protected $model = 'Hg\Oo\Test';
//    public function __construct(Test $a) {
//        $this->otherName = $a;
//    }
    public function __toString() {
        return 'this is '.__CLASS__;
    }
    public function getOthers(){
        $class = '\\'.ltrim($this->model, '\\');
              
		return new $class;
    }
	public function getWhat(){
		return new What();
	}
    
}
