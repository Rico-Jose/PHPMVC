<?php

namespace app\core;

class Response
{
    public function setStatusCode(int $code)
    {
        // Set the status code
        http_response_code($code);
    }
}