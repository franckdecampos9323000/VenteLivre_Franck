<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Throwable;

class PostTooLargeExceptionHandler extends ExceptionHandler
{
    //

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof PostTooLargeException) {
            return response()->view('errors.filetoolarge', [], 422); // Personnalisez la vue et le code HTTP en conséquence.
        }

        return parent::render($request, $exception);
    }
}
