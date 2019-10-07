<?php

namespace Abzudev\LaravelCacheClear\Tests\Unit;

use Abzudev\LaravelCacheClear\Tests\BaseTestCase;

class CacheTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function a_GET_request_clears_cache()
    {
        $data = 'Random string';

        $this->setCache($data);

        $this->verifyCache($data);

        $this->get('cc');

        $this->verifyCacheCleared();
    }

    /** @test */
    public function a_POST_request_clears_cache()
    {
        $data = 'Random string';

        $this->setCache($data);

        $this->verifyCache($data);

        $this->post('cc');

        $this->verifyCacheCleared();
    }

    private function setCache($data)
    {
        $cache = \Cache::get('cache');

        $this->assertNull($cache);

        \Cache::put('cache', $data);
    }

    private function verifyCache($data)
    {
        $cache = \Cache::get('cache');

        $this->assertSame($cache, $data);
    }

    private function verifyCacheCleared()
    {
        $cache = \Cache::get('cache');

        $this->assertNull($cache);
    }

}
