<?php

declare(strict_types = 1);

namespace App\Mail\Domain\Entity;

use App\Shared\Domain\ValueObject\Link;
use App\Shared\Domain\ValueObject\Mail as Email;
use App\Shared\Domain\ValueObject\Ulid;

class Mail
{
	public function __construct(
		public readonly Ulid $id,
		public Email $email,
		public string $password,
		public string $oAuthToken
	) {}
}