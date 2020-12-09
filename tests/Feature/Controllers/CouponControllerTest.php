<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Coupon;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CouponControllerTest extends TestCase
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
    public function it_displays_index_view_with_coupons()
    {
        $coupons = factory(Coupon::class, 5)->create();

        $response = $this->get(route('coupons.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.coupons.index')
            ->assertViewHas('coupons');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_coupon()
    {
        $response = $this->get(route('coupons.create'));

        $response->assertOk()->assertViewIs('app.coupons.create');
    }

    /**
     * @test
     */
    public function it_stores_the_coupon()
    {
        $data = factory(Coupon::class)
            ->make()
            ->toArray();

        $response = $this->post(route('coupons.store'), $data);

        $this->assertDatabaseHas('coupons', $data);

        $coupon = Coupon::latest('id')->first();

        $response->assertRedirect(route('coupons.edit', $coupon));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_coupon()
    {
        $coupon = factory(Coupon::class)->create();

        $response = $this->get(route('coupons.show', $coupon));

        $response
            ->assertOk()
            ->assertViewIs('app.coupons.show')
            ->assertViewHas('coupon');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_coupon()
    {
        $coupon = factory(Coupon::class)->create();

        $response = $this->get(route('coupons.edit', $coupon));

        $response
            ->assertOk()
            ->assertViewIs('app.coupons.edit')
            ->assertViewHas('coupon');
    }

    /**
     * @test
     */
    public function it_updates_the_coupon()
    {
        $coupon = factory(Coupon::class)->create();

        $data = [
            'code' => $this->faker->text(255),
            'start_date' => $this->faker->date,
            'expired_date' => $this->faker->date,
            'discount_type' => 'Amount',
            'amount' => $this->faker->randomNumber(2),
        ];

        $response = $this->put(route('coupons.update', $coupon), $data);

        $data['id'] = $coupon->id;

        $this->assertDatabaseHas('coupons', $data);

        $response->assertRedirect(route('coupons.edit', $coupon));
    }

    /**
     * @test
     */
    public function it_deletes_the_coupon()
    {
        $coupon = factory(Coupon::class)->create();

        $response = $this->delete(route('coupons.destroy', $coupon));

        $response->assertRedirect(route('coupons.index'));

        $this->assertDeleted($coupon);
    }
}
