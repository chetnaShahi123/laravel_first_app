<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    { //die("vgfg");
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {//die("djhfh");
        // if ($e instanceof CustomException) {
        //     return response()->view('errors.custom', [], 500);
        // }
        // return parent::render($request, $e);

        // if ($e instanceof HttpResponseException) {
        //     return $e->getResponse();
        // } elseif ($e instanceof ModelNotFoundException) {
        //     $e = new NotFoundHttpException($e->getMessage(), $e);
        // } elseif ($e instanceof AuthenticationException) {
        //     return $this->unauthenticated($request, $e);
        // } elseif ($e instanceof AuthorizationException) {
        //     $e = new HttpException(403, $e->getMessage());
        // } elseif ($e instanceof ValidationException && $e->getResponse()) {
        //     return $e->getResponse();
        // }

        // if ($this->isHttpException($e)) {
        //     return $this->toIlluminateResponse($this->renderHttpException($e), $e);
        // } else {
        //     return $this->toIlluminateResponse($this->convertExceptionToResponse($e), $e);
        // }


        //check if exception is an instance of ModelNotFoundException.
        // if ($exception instanceof CustomException) {
        //     // ajax 404 json feedback
        //     if ($request->ajax()) {
        //         return response()->json(['error' => 'Not Found'], 404);
        //     }

        //     // normal 404 view page feedback
        //     return response()->view('errors.missing', [], 404);
        // }
echo"<pre>";print_r($exception);die;
        return parent::render($request, $exception);
     //return response()->view('errors.404', [], 404);
      
     //return abort(401, 'The resource you are looking for could not be found');
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
