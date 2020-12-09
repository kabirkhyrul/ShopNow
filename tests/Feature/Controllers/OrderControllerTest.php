<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Order;

use App\Models\Coupon;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderControllerTest extends TestCase
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
    public function it_displays_index_view_with_orders()
    {
        $orders = factory(Order::class, 5)->create();

        $response = $this->get(route('orders.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.orders.index')
            ->assertViewHas('orders');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_order()
    {
        $response = $this->get(route('orders.create'));

        $response->assertOk()->assertViewIs('app.orders.create');
    }

    /**
     * @test
     */
    public function it_stores_the_order()
    {
        $data = factory(Order::class)
            ->make()
            ->toArray();

        $response = $this->post(route('orders.store'), $data);

        $this->assertDatabaseHas('orders', $data);

        $order = Order::latest('id')->first();

        $response->assertRedirect(route('orders.edit', $order));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_order()
    {
        $order = factory(Order::class)->create();

        $response = $this->get(route('orders.show', $order));

        $response
            ->assertOk()
            ->assertViewIs('app.orders.show')
            ->assertViewHas('order');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_order()
    {
        $order = factory(Order::class)->create();

        $response = $this->get(route('orders.edit', $order));

        $response
            ->assertOk()
            ->assertViewIs('app.orders.edit')
            ->assertViewHas('order');
    }

    /**
     * @test
     */
    public function it_updates_the_order()
    {
        $order = factory(Order::class)->create();

        $user = factory(User::class)->create();
        $coupon = factory(Coupon::class)->create();

        $data = [
            'billing_address' => $this->faker->text(255),
            'billing_name' => $this->faker->text(255),
            'billing_mobile' => $this->faker->text(255),
            'notes' => $this->faker->text,
            'shipping_name' => $this->faker->text(255),
            'shipping_mobile' => $this->faker->text(255),
            'shipping_address' => $this->faker->text(255),
            'sub_total' => $this->faker->randomNumber(2),
            'profit' => $this->faker->randomNumber(2),
            'total' => $this->faker->randomFloat(2, 0, 9999),
            'status' => 'pending',
            'user_id' => $user->id,
            'coupon_id' => $coupon->id,
        ];

        $response = $this->put(route('orders.update', $order), $data);

        $data['id'] = $order->id;

        $this->assertDatabaseHas('orders', $data);

        $response->assertRedirect(route('orders.edit', $order));
    }

    /**
     * @test
     */
    public function it_deletes_the_order()
    {
        $order = factory(Order::class)->create();

        $response = $this->delete(route('orders.destroy', $order));

        $response->assertRedirect(route('orders.index'));

        $this->assertDeleted($order);
    }
}
