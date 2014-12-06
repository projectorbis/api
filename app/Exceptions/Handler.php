<?php namespace Orbis\Exceptions;

use Exception;
use Psr\Log\LoggerInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class Handler extends ExceptionHandler {

	/**
	 * Create a new exception handler instance.
	 *
	 * @param  \Psr\Log\LoggerInterface                      $log
	 * @param  \Illuminate\Contracts\Routing\ResponseFactory $responseFactory
	 * @return void
	 */
	public function __construct(LoggerInterface $log, ResponseFactory $responseFactory)
	{
		parent::__construct($log);
		$this->responseFactory = $responseFactory;
	}
	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		return parent::report($e);
	}

	/**
	 * Render an exception into a response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{
		if ($e instanceof TooManyRequestsHttpException) {
			return $this->responseFactory->json([$e->getMessage()], $e->getStatusCode(), $e->getHeaders());
		}

		return parent::render($request, $e);
	}

}
