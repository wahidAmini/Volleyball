<?php

namespace Core\Router;

class Request
{
    private string $method;

    private string $uri;

    private array $form = [];

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = '/' . trim($_SERVER['REQUEST_URI'], '/');
        $this->form = $_POST;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getForm()
    {
        return $this->form;
    }
}
