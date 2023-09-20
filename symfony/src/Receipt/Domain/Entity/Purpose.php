<?php

namespace App\Receipt\Domain\Entity;

use DomainException;

class Purpose
{
	private function __construct(
		public string $value
	) {}

	public static function create(string $value): Purpose
	{
		if (!static::isValid($value)) {
			throw new DomainException('Purpose->value is invalid');
		}

		return new self($value);
	}

	public static function isValid(string $value): bool
	{

		return !empty($value);
	}
}