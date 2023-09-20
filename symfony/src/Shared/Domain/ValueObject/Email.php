<?php

declare(strict_types = 1);

namespace App\Shared\Domain\ValueObject;

use DomainException;

readonly class Email
{
	private function __construct(
		public string $value
	) {}

	public static function create(string $value): Email
	{
		if (!static::isValid($value)) {
			throw new DomainException('Mail->value is not Email');
		}

		return new self($value);
	}

	public static function isValid(string $value): bool
	{
		return false !== filter_var($value, FILTER_VALIDATE_EMAIL);
	}


}