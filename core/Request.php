<?php

namespace app\core;

class Request
{
    public function getPath()
    {
        // Fetch the value of $_SERVER['REQUEST_URI']
        // and return '/' if it does not exist.
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // Check if question mark exists then get
        // its position.
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    // Remove all invalid symbols for security
    public function getBody()
    {
        $body = [];
        if ($this->getMethod() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->getMethod() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}