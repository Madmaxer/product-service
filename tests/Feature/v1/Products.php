<?php

namespace App\Test\Feature\v1;

use App\Test\TestCase;

class Products extends TestCase
{
    public function testHealth(): void
    {
        $response = $this->get('/api/v1/product');
        $response->assertStatus(200);
        $this->assertSame($response->getContent(), \json_encode(['example']));
    }
}
