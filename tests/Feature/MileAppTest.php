<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MileAppTest extends TestCase
{
    public function testGetIndex()
    {
        $this->json('get', 'api/package')
            ->assertStatus(200)
            ->assertJsonStructure(
                [
                    'success',
                    'data'
                ]
            )->assertSeeText("63d214abccc329f72fc27c39");
    }

    public function testGetShow()
    {
        $this->json('get', 'api/package/63d214abccc329f72fc27c39')
            ->assertStatus(200)
            ->assertJsonStructure(
                [
                    'success',
                    'data'
                ]
            )->assertSeeText("63d214abccc329f72fc27c39");
    }

    public function testDeleteDestroy()
    {
        $this->json('delete', 'api/package?id=63d3ca29dd67f5e610437c48')
            ->assertStatus(200)
            ->assertSeeText("Transaction deleted successfully.");
    }
}
