<?php
namespace AIS\blogic\debug;

/**
 * This class is purely for running simple, ad hoc tests to determine if app is functioning.
 * Not to be confused with unit testing. 
 */
final class TestAppRunner implements ITestRunner
{

    public function runTest()
    {
        self::showTemplate();
    }

    /**
     * Output a template to demonstrate the template engine is working as expected.
     *
     * @return void
     */
    public static function showTemplate()
    {
        $t = new \AIS\view\Template('subscription.twig');
        $t->show();
    }


}