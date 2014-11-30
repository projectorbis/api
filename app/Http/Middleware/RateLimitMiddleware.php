<?php namespace Orbis\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use GrahamCampbell\Throttle\Throttle;
use Orbis\Exceptions\RateLimitException;
use Illuminate\Contracts\Routing\Middleware;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class RateLimitMiddleware implements Middleware {

	/**
     * The throttle instance.
     *
     * @var \GrahamCampbell\Throttle\Throttle
     */
    protected $throttle;

    /**
     * Create a new instance.
     *
     * @param \GrahamCampbell\Throttle\Throttle $throttle
     *
     * @return void
     */
    public function __construct(Throttle $throttle)
    {
        $this->throttle = $throttle;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 *
	 * @throws \Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// TODO: Move to config
		$limit = 60;
		$time  = 60;

		if (false === $this->throttle->attempt($request, $limit, $time)) {
			throw new TooManyRequestsHttpException($time * 60, 'Rate limit exceed.');
		}

		$response = $next($request);

		$remaining = $limit - $this->throttle->count($request);
		$response->headers->set('X-RateLimit-Limit', $limit);
		$response->headers->set('X-RateLimit-Remaining', $remaining > 0 ? $remaining : 0);
		// TODO: Reqrite rate limiter to support reset time display
		// $response->headers->set('X-RateLimit-Reset', 5);

		return $response;
	}

}
