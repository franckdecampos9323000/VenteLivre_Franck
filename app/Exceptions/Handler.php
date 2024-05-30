<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
            $statusCode = $exception->getStatusCode();
            if ($statusCode == 403) {
                return response()->view('errors.403', [], 403);
            }
            if ($statusCode == 404) {
                return response()->view('errors.404', [], 404);
            }
        } elseif ($exception instanceof \Illuminate\Http\Exceptions\PostTooLargeException) {
            return response()->view('errors.filetoolarge', [], 422); // Personnalisez la vue et le code HTTP en conséquence.
        }

        return parent::render($request, $exception);
    }
}
