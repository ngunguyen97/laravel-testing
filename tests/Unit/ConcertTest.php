<?php

namespace Tests\Unit;

use App\Concert;
use App\Exceptions\NotEnoughTicketsRemainException;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConcertTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_get_formatted_date()
    {
      $concert = factory(Concert::class)->make([
        'date' => Carbon::parse('2016-12-01 8:00pm'),
      ]);

      $this->assertEquals('December 1, 2016', $concert->formatted_date);
    }

    /** @test */
    public function can_get_formatted_start_time()
    {
      $concert = factory(Concert::class)->make([
        'date' => Carbon::parse('2023-01-04 09:00:00')
      ]);

      $this->assertEquals('9:00am', $concert->formatted_start_time);
    }

    /** @test */
    public function can_get_ticket_price_in_dollars()
    {
      $concert = factory(Concert::class)->make([
        'ticket_price' => 6750
      ]);

      $this->assertEquals('67.50', $concert->ticket_price_in_dollars);
    }

    /** @test */
    public function concerts_with_a_published_at_date_are_published()
    {
      $publishedConcertA = factory(Concert::class)->create(['published_at' => Carbon::parse('-1 week')]);
      $publishedConcertB = factory(Concert::class)->create(['published_at' => Carbon::parse('-1 week')]);
      $unpublishedConcert = factory(Concert::class)->create(['published_at' => null]);

      $publishedConcerts = Concert::published()->get();

      $this->assertTrue($publishedConcerts->contains($publishedConcertA));
      $this->assertTrue($publishedConcerts->contains($publishedConcertB));
      $this->assertFalse($publishedConcerts->contains($unpublishedConcert));
    }

    /** @test */
    public function can_order_concert_tickets()
    {
        $concert = factory(Concert::class)->create();
        $concert->addTickets(3);
        $order = $concert->orderTickets('jane@example.com', 3);

        $this->assertEquals('jane@example.com', $order->email);
        $this->assertEquals(3, $order->tickets()->count());
    }

    /** @test */
    public function can_add_tickets()
    {
        $concert = factory(Concert::class)->create();

        $concert->addTickets(10);

        $this->assertEquals(10, $concert->ticketsRemaining());
    }

    /** @test */
    public function tickets_remaining_does_not_includes_tickets_that_were_already_allocated()
    {
        $concert = factory(Concert::class)->create();
        $concert->addTickets(10);
        $concert->orderTickets('joey.tribbiani@daysofourlives.tv', 4);

        $this->assertEquals(6, $concert->ticketsRemaining());
    }

    /** @test */
    public function trying_to_purchase_more_tickets_than_remain_throws_an_exception()
    {
        $concert = factory(Concert::class)->create();
        $concert->addTickets(10);
        $this->expectException(NotEnoughTicketsRemainException::class);
        $concert->orderTickets('holly@thedog.com', 24);
    }
}
