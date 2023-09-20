<?php

namespace unit\Shared;

use App\Shared\Domain\ValueObject\Ulid;
use App\Tests\Support\UnitTester;
use Codeception\Test\Unit;
use Symfony\Component\Uid\Ulid as SymfonyUlid;

class UlidTest extends Unit
{
	protected UnitTester $tester;

	protected function _before() {}

	// tests
	public function testSuccessGeneration()
	{
		$ulid = Ulid::generate();

		$this->assertTrue(SymfonyUlid::isValid($ulid->value));
	}
}