<?php

declare(strict_types = 1);

namespace App\User\Domain\Entity;

use App\Shared\Domain\ValueObject\Ulid;

class User
{
	/**
	 * @param Ulid[] $emails
	 */
	private function __construct(
		public readonly Ulid $id,
		public string $name,
		public string $surname,
		public array $emails
	) {}
}