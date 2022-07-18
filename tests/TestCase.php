<?php

namespace Tests;

use PHPUnit\Framework\TestCase as FrameworkTestCase;
use Tests\Traits\UseFaker;
use Tests\Traits\UseMemoryDatabase;
use Tests\Traits\UseTestCaseHooks;

class TestCase extends FrameworkTestCase {
    use UseTestCaseHooks, UseMemoryDatabase, UseFaker;
}
