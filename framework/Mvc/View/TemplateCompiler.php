<?php

namespace Framework\Mvc\View;

use Phalcon\Mvc\View\Engine\Volt\Compiler;

class TemplateCompiler
{
    /**
     * @var string
     */
    private $compiledPath;

    /**
     * @var string
     */
    private $templatesDir;

    /**
     * @var Compiler
     */
    private $compiler;

    /**
     * @param string $compiledPath
     * @param string $templatesDir
     */
    function __construct($compiledPath, $templatesDir)
    {
        $this->compiledPath = $compiledPath;
        $this->templatesDir = $templatesDir;

        $this->compiler = new Compiler();

        $this->compiler->setOptions(array(
            "compiledPath" => $this->compiledPath,
        ));
    }

    /**
     * @param string $templatePath
     * @param array $data
     * @return string
     */
    public function getString($templatePath, $data)
    {
        extract($data);

        $this->compiler->compile($this->templatesDir . '/' . $templatePath);

        ob_start();

        include $this->compiler->getCompiledTemplatePath();

        return ob_get_clean();
    }
}