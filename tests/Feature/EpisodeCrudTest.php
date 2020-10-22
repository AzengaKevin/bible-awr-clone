<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Episode;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EpisodeCrudTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * 
     * @group episode
     */
    public function admin_can_add_an_episode(){

        //Arrange
        
        //Act
        $episode = Episode::factory()->create();

        //Assert
        $this->assertCount(1, Episode::all());
        $this->assertEquals(Episode::first()->title, $episode->title);
        $this->assertEquals(Episode::first()->body, $episode->body);
        $this->assertEquals(Episode::first()->audio_url, $episode->audio_url);
        $this->assertEquals(Episode::first()->video_url, $episode->video_url);

        $this->assertNotNull(Episode::first()->author);


    }
}
