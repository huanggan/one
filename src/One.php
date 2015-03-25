<?php
namespace Hg\One;
use Hg\Hgtest\Test;
class One{
    public function __toString() {
        echo 'this is '.__CLASS__;
    }
	public getOther(){
		return Hg\Hgtest\Test();
	}
    
}
?>