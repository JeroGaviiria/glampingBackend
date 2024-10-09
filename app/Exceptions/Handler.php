<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    protected function handleApiExceptions($request, $exception)
    {
        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['error' => 'Model Not Found'], 404);
        }

        Log::warning("[Handler.handleApiExceptions] API Exception type '" . get_class($exception) . "' not handled.");
        return parent::render($request, $exception);
    }

    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson()) {
            return $this->handleApiExceptions($request, $exception);
        }

        return parent::render($request, $exception);
    }
}
