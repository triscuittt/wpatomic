<?php
namespace Dust\Helper;

class GtTest extends ComparisonTestBase {
    public function __construct() { parent::__construct('gt'); }
    
    public function testGt() {
        $this->assertValidResult(12, 12, false);
        $this->assertValidResult(12, '12', false);
        $this->assertValidResult(12, 15, false);
        $this->assertValidResult(15, 12, true);
        $this->assertValidResult([1, 2], [3, 4], false);
        $this->assertValidResult('foo', 'bar', true);
        $this->assertValidResult('bar', 'foo', false);
    }
    
}