<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');
		$this->assertResponseOk();
		dd($response->getContent());
		$this->assertEquals('coucou', $response->getContent());
	}
}
