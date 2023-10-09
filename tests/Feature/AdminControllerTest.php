<?php

namespace Tests\Feature;

use App\Models\Admin;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreateAdmin(): void
    {
        $this->seed();
        $this->assertEquals(1, Admin::count());
    }


}