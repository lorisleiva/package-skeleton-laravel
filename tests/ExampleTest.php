<?php

namespace Lorisleiva\Skeleton\Tests;

use Lorisleiva\Skeleton\Skeleton;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_resolves_from_the_container()
    {
        $skeleton = $this->app->make(Skeleton::class);

        $this->assertTrue($skeleton instanceof Skeleton);
    }
}
