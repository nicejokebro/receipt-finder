<?php

declare(strict_types = 1);

namespace App\Shared\Domain\ValueObject;

use DomainException;
use Symfony\Component\Uid\Ulid as SymfonyUlid;

readonly class Ulid
{
	private function __construct(
		public string $value
	) {}

	public static function generate(): Ulid
	{
		return new self(SymfonyUlid::generate());
	}

	public static function fromString(string $value): Ulid
	{
		if (!self::isValid($value)) {
			throw new DomainException('Invalid Ulid Value');
		}

		return new self($value);
	}

	private static function isValid(string $value): bool
	{
		return SymfonyUlid::isValid($value);
	}
}