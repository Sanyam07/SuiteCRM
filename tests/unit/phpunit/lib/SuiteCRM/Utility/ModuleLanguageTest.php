<?php


class ModuleLanguageTest extends ICTCRM\StateCheckerPHPUnitTestCaseAbstract
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \ICTCRM\Utility\ModuleLanguage $paths
     */
    private static $language;


    protected function setUp()
    {
        parent::setUp();
        if (self::$language === null) {
            self::$language = new \ICTCRM\Utility\ModuleLanguage();
        }
    }

    public function testGetCurrentLanguage()
    {
        $language = self::$language->getModuleLanguageStrings(new \ICTCRM\Utility\CurrentLanguage(), 'Accounts');
        $this->assertNotEmpty($language);
        $this->assertArrayHasKey('LBL_MODULE_NAME', $language);
    }
}
