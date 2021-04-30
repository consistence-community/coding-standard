<?php

declare(strict_types = 1);

namespace Consistence\Sniffs\Exceptions;

class ChainableConstructorWithNullablePreviousException extends \Exception
{

	public function __construct(string $foo, ?\Throwable $e = null)
	{
		parent::__construct($foo, 0, $e);
	}

}
