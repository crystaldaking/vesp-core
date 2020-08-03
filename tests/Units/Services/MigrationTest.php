<?php

namespace Vesp\CoreTests\Units\Services;

use Illuminate\Database\Schema\Builder;
use Vesp\Services\Migration;
use Vesp\CoreTests\TestCase;

class MigrationTest extends TestCase
{
    public function testInit(): void
    {
        $migration = new Migration('test', '1.0');
        $migration->init();
        self::assertInstanceOf(Builder::class, $migration->schema);
    }
}
