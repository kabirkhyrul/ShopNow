<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Review;

use App\Models\Product;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            factory(User::class)->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_reviews()
    {
        $reviews = factory(Review::class, 5)->create();

        $response = $this->get(route('reviews.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.reviews.index')
            ->assertViewHas('reviews');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_review()
    {
        $response = $this->get(route('reviews.create'));

        $response->assertOk()->assertViewIs('app.reviews.create');
    }

    /**
     * @test
     */
    public function it_stores_the_review()
    {
        $data = factory(Review::class)
            ->make()
            ->toArray();

        $response = $this->post(route('reviews.store'), $data);

        $this->assertDatabaseHas('reviews', $data);

        $review = Review::latest('id')->first();

        $response->assertRedirect(route('reviews.edit', $review));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_review()
    {
        $review = factory(Review::class)->create();

        $response = $this->get(route('reviews.show', $review));

        $response
            ->assertOk()
            ->assertViewIs('app.reviews.show')
            ->assertViewHas('review');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_review()
    {
        $review = factory(Review::class)->create();

        $response = $this->get(route('reviews.edit', $review));

        $response
            ->assertOk()
            ->assertViewIs('app.reviews.edit')
            ->assertViewHas('review');
    }

    /**
     * @test
     */
    public function it_updates_the_review()
    {
        $review = factory(Review::class)->create();

        $product = factory(Product::class)->create();
        $user = factory(User::class)->create();

        $data = [
            'body' => $this->faker->text,
            'ratings' => $this->faker->randomNumber(2),
            'product_id' => $product->id,
            'user_id' => $user->id,
        ];

        $response = $this->put(route('reviews.update', $review), $data);

        $data['id'] = $review->id;

        $this->assertDatabaseHas('reviews', $data);

        $response->assertRedirect(route('reviews.edit', $review));
    }

    /**
     * @test
     */
    public function it_deletes_the_review()
    {
        $review = factory(Review::class)->create();

        $response = $this->delete(route('reviews.destroy', $review));

        $response->assertRedirect(route('reviews.index'));

        $this->assertDeleted($review);
    }
}
