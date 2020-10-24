<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminEpisodesManagementTest extends TestCase
{
    use RefreshDatabase;

    private $user = null;

    public function setUp():void
    {
        parent::setUp();

        //Creates the user and simulates login
        $this->actingAs($this->user = User::factory()->create());

    }

    /**
     * @test
     * 
     * @group episodes
     */
    public function admin_can_view_all_episodes_page()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->get('/admin/episodes');

        $response->assertOk();

        $response->assertViewIs('admin.episodes.index');

        $response->assertViewHas('episodes');
    }

    /**
     * @test
     * 
     * @group episode
     */
    public function admin_can_view_episode_create_page()
    {
        //Arrange
        $this->withoutExceptionHandling();

        //Act
        $response = $this->get('/admin/episodes/create');

        //Assert
        $response->assertOk();

        $response->assertViewIs('admin.episodes.create');
    }
}
