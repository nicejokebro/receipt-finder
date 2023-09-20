<?php


namespace unit\Shared;

use App\Shared\Domain\ValueObject\Email;
use App\Tests\Support\UnitTester;
use Codeception\Test\Unit;
use DomainException;

class EmailTest extends Unit
{

	protected UnitTester $tester;

	protected function _before() {}

	// tests
	public function testValidEmail()
	{
		$mail = 'blinki82@yandex.ru';
		$mailObject = Email::create($mail);

		$this->assertEquals($mail, $mailObject->value);
	}

	public function testInvalidEmail()
	{
		$this->expectException(DomainException::class);

		$mail = '@yandex.ru';
		$mailObject = Email::create($mail);
	}
}
