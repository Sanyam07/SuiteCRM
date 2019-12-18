<?php

use ICTCRM\Utility\StringValidator;

class StringValidatorTest extends ICTCRM\StateCheckerPHPUnitTestCaseAbstract
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testStartsWith()
    {
        $testString = 'foobarbaz';
        $this->assertTrue(StringValidator::startsWith($testString, 'foo'));
        $this->assertFalse(StringValidator::startsWith($testString, 'bar'));
    }

    public function testEndsWith()
    {
        $testString = 'foobarbaz';
        $this->assertTrue(StringValidator::endsWith($testString, 'baz'));
        $this->assertFalse(StringValidator::endsWith($testString, 'bar'));
    }
}
