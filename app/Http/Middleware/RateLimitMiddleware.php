<?php namespace Orbis\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use GrahamCampbell\Throttle\Facades\Throttle;
use Orbis\Exceptions\RateLimitException;
use Illuminate\Http\Response;

class RateLimitMiddleware implements Middleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// TODO: Move to config
		$limit     = 60;
		$retention = 60;

		if (false === Throttle::attempt($request, $limit, $retention)) {
			$response = new Response();
			$response->prepare($request);
			$response->setStatusCode(403)
			         ->setContent(
			         	['message' => 'API rate limit exceeded for xxx.xxx.xxx.xxx.']
		         	);
		} else {
			$response = $next($request);
		}

		$remaining = $limit - Throttle::count($request);

		$response->headers->set('X-RateLimit-Limit', $limit);
		$response->headers->set('X-RateLimit-Remaining', $remaining > 0 ? $remaining : 0);
		// TODO: Reqrite rate limiter to support reset time display
		// $response->headers->set('X-RateLimit-Reset', 5);

		return $response;
	}

}
