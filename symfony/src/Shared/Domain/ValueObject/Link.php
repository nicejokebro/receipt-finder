<?php

declare(strict_types = 1);

namespace App\Shared\Domain\ValueObject;

use DomainException;

readonly class Link
{
	private function __construct(
		public string $value
	) {}

	public static function create(string $value): Link
	{
		if (!static::isValid($value)) {
			throw new DomainException('Link->value is not a URL');
		}

		return new self($value);
	}

	public static function isValid(string $value): bool
	{
		return false !== filter_var($value, FILTER_VALIDATE_URL);
	}
}