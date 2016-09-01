<?php

  use Illuminate\Foundation\Testing\WithoutMiddleware;
  use Illuminate\Foundation\Testing\DatabaseMigrations;
  use Illuminate\Foundation\Testing\DatabaseTransactions;

  class NamesTest extends TestCase {

    public function test200StatusReturnedWhenNamesEndpointHit() {
      $response = $this->call('GET', '/names');
      $this->assertEquals(200, $response->status());
    }

    public function testNamesAreReturned() {
      $response = $this->call('GET', '/names');
      $this->assertEquals('{"1":"John","2":"Mary","3":"Steven"}', $response->content()); }
  }
