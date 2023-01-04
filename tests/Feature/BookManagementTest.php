<?php

namespace Tests\Feature;

use App\Author;
use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookManagementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_book_can_be_added_to_a_library(): void
    {
      // $this->withoutExceptionHandling();

      $response = $this->post('/books', [
        'title' => 'Book Book Title',
        'author' => 'Victor'
      ]);

      $response->assertOk();
      $this->assertCount(1, Book::all());
    }

    /**
     * @test
     */
    public function a_title_is_required(): void
    {
      // $this->withoutExceptionHandling();
      $response = $this->post('/books', [
        'title' => '',
        'author' => 'Victor'
      ]);

      $response->assertSessionHasErrors('title');

    }

    /**
     * @test
     */
    public function a_author_is_required(): void
    {
      // $this->withoutExceptionHandling();

      $response = $this->post('/books', [
        'title' => 'Cool Book Title',
        'author' => ''
      ]);

      $response->assertSessionHasErrors('author');
    }

    /**
     * @test
     */
    public function a_book_can_be_updated(): void
    {
      // $this->withoutExceptionHandling();

      $this->post('/books', [
        'title' => 'Cool Title',
        'author' => 'Victor'
      ]);

      $book = Book::first();

      $response = $this->patch('/books/'. $book->id, [
        'title' => 'New Title',
        'author' => 'New Author'
      ]);

      $this->assertEquals('New Title',Book::first()->title);
      $this->assertEquals('New Author',Book::first()->author);
      $response->assertRedirect('/books/' . $book->id);

    }

    /**
     * @test
     */
    public function a_book_can_be_deleted(): void
    {
      $this->post('/books', [
        'title' => 'Cool Title',
        'author' => 'Victor'
      ]);

      $book = Book::first();

      $response = $this->delete('/books/'. $book->id, [
        'title' => 'New Title',
        'author' => 'New Author'
      ]);

      $this->assertCount(0, Book::all());
      $response->assertRedirect('books');
    }

    /**
     * @test
     */
    public function a_new_author_is_automatically_added(): void
    {
      // $this->withoutExceptionHandling();

      $this->post('/books', [
        'title' => 'Cool Title',
        'author' => 'Victor'
      ]);

      $book = Book::first();
      $author = Author::first();

      $this->assertEquals($author->id, $book->author_id);
      $this->assertCount(1, Author::all());

    }
}

https://gist.github.com/Pen-y-Fan/bb3eea45e71ab066787bdf472741374f
// Create a helper function called set
