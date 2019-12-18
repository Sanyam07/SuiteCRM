<?php


class CurrentLanguageTest extends ICTCRM\StateCheckerPHPUnitTestCaseAbstract
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \ICTCRM\Utility\CurrentLanguage $paths
     */
    private static $language;


    protected function setUp()
    {
        parent::setUp();
        if (self::$language === null) {
            self::$language = new \ICTCRM\Utility\CurrentLanguage();
        }
    }

    public function testGetCurrentLanguage()
    {
        $state = new ICTCRM\StateSaver();
        $state->pushFile('config_override.php');
        
        $language = self::$language->getCurrentLanguage();
        $this->assertNotEmpty($language);
        
        $state->popFile('config_override.php');
    }
}
