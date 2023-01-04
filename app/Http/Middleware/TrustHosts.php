<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
	/**
	 * Get the host patterns that should be trusted.
	 *
	 * @return array
	 */
	public function hosts(): array
	{
		return [
			'mydevis.franckdabou@gmail.com',
			$this->allSubdomainsOfApplicationUrl(),
		];
	}
}
