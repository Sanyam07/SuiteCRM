<?php

class configTest extends ICTCRM\StateCheckerPHPUnitTestCaseAbstract
{
    public function test_config()
    {
        global $sugar_config;
        $this->assertNotEmpty($sugar_config, 'ICTCRM config is empty');
    }
    
    public function testFoo()
    {
        $this->assertTrue(true);
    }
}
