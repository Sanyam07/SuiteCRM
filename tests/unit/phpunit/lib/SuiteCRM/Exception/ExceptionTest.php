<?php

namespace ICTCRM\Exception;

use Psr\Log\LogLevel;

class ExceptionTest extends \ICTCRM\StateCheckerPHPUnitTestCaseAbstract
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**#
     * @var Exception $exception
     */
    private static $exception;

    protected function setUp()
    {
        parent::setUp();
        if (self::$exception === null) {
            self::$exception = new Exception();
        }
    }

    public function testGetDetail()
    {
        $this->assertEquals(
            'ICTCRM has encountered an exception which has not been handled',
            self::$exception->getDetail()
        );
    }

    public function testGetLogLevel()
    {
        $this->assertEquals(
            LogLevel::CRITICAL,
            self::$exception->getLogLevel()
        );
    }
}
