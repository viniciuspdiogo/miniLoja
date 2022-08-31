<?php

namespace App\Exceptions;

use Exception;

class OrderException extends Exception
{

    protected $message;
    
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return view('error.index');   
    }
}
