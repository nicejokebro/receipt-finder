<?php

namespace App\Shared\Domain\ValueObject;

use Symfony\Component\Validator\Constraints\Url;
use Symfony\Component\Validator\Mapping\ClassMetadata;

readonly class Link
{
	private function __construct(
		public string $value
	) {}

	public static function set(string $value): Link
	{
		return new self($value);
	}

	public static function isValid(string $value): bool
	{
		#TODO Валидация строки как URL
		return false;
	}
}