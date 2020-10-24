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
    public function episode_can_be_created(){

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

    /**
     * @test
     * 
     * @group episode
     */
    public function episode_title_is_required()
    {
        //Arrange
        $this->expectException(\Exception::class);
        //Act
        Episode::factory()->create(['title' => null]);

        //Assert
    }

    /**
     * @test
     * 
     * @group episode
     */
    public function episode_body_is_required()
    {
        //Arrange
        $this->expectException(\Exception::class);
        //Act
        Episode::factory()->create(['body' => null]);

        //Assert
    }
    
    /**
     * @test
     * 
     * @group episode
     */
    public function episode_audio_url_is_required()
    {
        $this->expectException(\Exception::class);

        Episode::factory()->create(['audio_url' => null]);
    }

    /**
     * @test
     * 
     * @group episode
     */
    public function episode_video_url_is_required()
    {
        $this->expectException(\Exception::class);

        Episode::factory()->create(['video_url' => null]);
    }

}
