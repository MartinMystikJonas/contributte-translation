<?php declare(strict_types=1);

/**
 * This file is part of the Contributte/Translation
 */

namespace Contributte\Translation\Tests\Tests;

use Contributte;
use Tester;

$container = require __DIR__ . '/../bootstrap.php';

class LocaleResolver extends Contributte\Translation\Tests\AbstractTest
{

	public function test01(): void
	{
		$resolverMock = \Mockery::mock(Contributte\Translation\LocalesResolvers\Parameter::class);
		$localeResolver = new Contributte\Translation\LocaleResolver;

		$localeResolver->addResolver($resolverMock);

		Tester\Assert::count(1, $localeResolver->resolvers);

		$localeResolver->addResolver($resolverMock);

		Tester\Assert::count(2, $localeResolver->resolvers);
	}

}


(new LocaleResolver($container))->run();
