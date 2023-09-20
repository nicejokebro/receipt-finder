<?php

declare(strict_types = 1);

namespace App\Receipt\Domain\Entity;

use App\Shared\Domain\ValueObject\Link;
use App\Shared\Domain\ValueObject\Ulid;

class Receipt
{
	public function __construct(
		public readonly Ulid $id,
		public Link $link,
		public Purpose $purpose
	) {}
}