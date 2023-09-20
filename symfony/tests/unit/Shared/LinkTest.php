<?php

namespace unit\Shared;

use App\Shared\Domain\ValueObject\Link;
use App\Tests\Support\UnitTester;
use Codeception\Test\Unit;

class LinkTest extends Unit
{
	protected UnitTester $tester;

	protected function _before() {}

	// tests
	public function testSuccessInstanceCreation()
	{
		$value = 'http://test.ru';
		$link = Link::create($value);

		$this->assertTrue((bool)filter_var($link->value, FILTER_VALIDATE_URL));
	}
}