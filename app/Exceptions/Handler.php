<?php

namespace App\Exceptions;

use App\Http\Helpers\ApiResponser;
use App\Http\Helpers\PersianResponse;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{

    use ApiResponser;
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->renderable(function (Throwable $e) {
             if($e instanceof NotFoundHttpException ) {
                return self::errorResponse(PersianResponse::HTTP_NOT_FOUND,Response::HTTP_NOT_FOUND);
            }
             if($e instanceof InsufficientBalanceException ) {
                return self::errorResponse($e->getMessage(),$e->getCode());
            }
             if($e instanceof AuthenticationException ) {
                 return self::errorResponse(PersianResponse::UN_AUTHENTICATED,Response::HTTP_UNAUTHORIZED);
             }
             if($e instanceof AccessDeniedHttpException){
                 return self::errorResponse(PersianResponse::ACCESS_DENIED,Response::HTTP_UNAUTHORIZED);
             }
             return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        });

    }
}
