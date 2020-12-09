<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Product;

use App\Models\Category;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerTest extends TestCase
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
    public function it_displays_index_view_with_products()
    {
        $products = factory(Product::class, 5)->create();

        $response = $this->get(route('products.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.products.index')
            ->assertViewHas('products');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_product()
    {
        $response = $this->get(route('products.create'));

        $response->assertOk()->assertViewIs('app.products.create');
    }

    /**
     * @test
     */
    public function it_stores_the_product()
    {
        $data = factory(Product::class)
            ->make()
            ->toArray();

        $response = $this->post(route('products.store'), $data);

        unset($data['slug']);

        $this->assertDatabaseHas('products', $data);

        $product = Product::latest('id')->first();

        $response->assertRedirect(route('products.edit', $product));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_product()
    {
        $product = factory(Product::class)->create();

        $response = $this->get(route('products.show', $product));

        $response
            ->assertOk()
            ->assertViewIs('app.products.show')
            ->assertViewHas('product');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_product()
    {
        $product = factory(Product::class)->create();

        $response = $this->get(route('products.edit', $product));

        $response
            ->assertOk()
            ->assertViewIs('app.products.edit')
            ->assertViewHas('product');
    }

    /**
     * @test
     */
    public function it_updates_the_product()
    {
        $product = factory(Product::class)->create();

        $category = factory(Category::class)->create();

        $data = [
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'cost_price' => $this->faker->randomNumber(2),
            'quantity' => $this->faker->randomNumber,
            'shipping' => $this->faker->randomNumber(0),
            'weight' => $this->faker->text(255),
            'special_price' => $this->faker->randomNumber(2),
            'short_description' => $this->faker->text,
            'description' => $this->faker->sentence(15),
            'information' => $this->faker->text,
            'total_sale' => $this->faker->randomNumber(0),
            'rating' => $this->faker->randomNumber(2),
            'slug' => $this->faker->slug,
            'is_featured' => $this->faker->boolean,
            'free_shipping' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'category_id' => $category->id,
        ];

        $response = $this->put(route('products.update', $product), $data);

        unset($data['slug']);

        $data['id'] = $product->id;

        $this->assertDatabaseHas('products', $data);

        $response->assertRedirect(route('products.edit', $product));
    }

    /**
     * @test
     */
    public function it_deletes_the_product()
    {
        $product = factory(Product::class)->create();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertRedirect(route('products.index'));

        $this->assertDeleted($product);
    }
}
