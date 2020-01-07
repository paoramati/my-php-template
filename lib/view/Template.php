<?php
namespace AIS\view;

/**
 * Simple template class that loads and outputs twig templates.
 */
class Template
{
    /**
     * Data associated with this template.
     * Set new data values for this template by adding them to this array.
     *
     * @var array
     */
    public $data = [];

    /**
     * Name of the template. Can include path which will need to be parsed.
     *
     * @var string
     */
    private $name;

    /**
     * The twig environment.
     *
     * @var \Twig\Environment
     * @psalm-suppress PropertyNotSetInConstructor  Remove this annotation in 2.0
     */
    private $twig;

    /**
     * Constructor
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->twig = $this->setUpTwig();

    }

    /**
     * Setup twig.
     * @return \Twig\Environment
     * @throws \Exception if the template does not exist
     */
    private function setUpTwig()
    {
        $templatePath = ROOT_DIR . '/templates';
        $loader = new \Twig\Loader\FileSystemLoader($templatePath);
        
        // abort if twig template does not exist
        if (!$loader->exists($this->name)) 
        {
            throw new \Exception('Template-file \"' . $this->name . '\" does not exist.');
        }

        $twig = new \Twig\Environment($loader);

        // add globals

        // add functions or extensions


        return $twig;
    }

    public function show()
    {
        echo $this->twig->render($this->name, $this->data);
    }

    // /**
    //  * Get data associated with this template
    //  *
    //  * @return  array
    //  */ 
    // public function getData()
    // {
    //     return $this->data;
    // }

    // /**
    //  * Set data associated with this template
    //  *
    //  * @param  array  $data  Data associated with this template
    //  *
    //  * @return  self
    //  */ 
    // public function setData(array $data)
    // {
    //     $this->data = $data;

    //     return $this;
    // }
}