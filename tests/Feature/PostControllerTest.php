<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreatePost(): void
    {
        $this->seed();
        $this->assertEquals(2, Post::count());
    }

    public function testUpdatePost()
    {
      
        $post = Post::factory()->create();

      
        $newTitle = 'Novo Título';
        $newDescription = 'Nova Descrição';


        $response = $this->put(route('admin.edit.post.update', ['post' => $post]), [
            'title' => $newTitle,
            'description' => $newDescription,
        ]);

 
        $response->assertRedirect(route('admin.new.post.show'));

        $post->refresh();

        $this->assertEquals($newTitle, $post->title);
        $this->assertEquals($newDescription, $post->text);
    }

    public function testStorePost()
    {
        $post = Post::create([
            'title' => 'Título do Post',
            'text' => 'Descrição do Post',
            'date' => now()->format('d/m/Y')
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'Título do Post',
            'text' => 'Descrição do Post',
            'date' => now()->format('d/m/Y')
        ]);


    }


}