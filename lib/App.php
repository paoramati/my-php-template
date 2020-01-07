<?php
namespace AIS;

use AIS\blogic\debug\TestAppRunner;
use AIS\view\TemplateMgr;
use Twig\Template;

final class App
{
    /**
     * Is the app running in debug mode.
     *
     * @var boolean
     */
    private $isDebug = false;

    public function __construct($isDebug = false)
    {
        $this->isDebug = $isDebug;
    }

    private function test()
    {
        /* test loading and display templates */
        TestAppRunner::showTemplate();
    }

    /**
     * Main app entry point. Run the app.
     *
     * @return void
     */
    public static function run($isDebug = false)
    {
        $instance = new App($isDebug);
    }

}