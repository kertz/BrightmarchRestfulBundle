<?php namespace Brightmarch\Bundle\RestfulBundle\Exceptions;

class HttpBadSyntaxException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 400);
    }

}
