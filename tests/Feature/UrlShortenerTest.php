<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlShortener extends TestCase
{
    /** @test */
    public function isUrlShortenerRouteWorking()
    {
            $this->get(route('url-shortener'))->assertOk(); 
    }
}
