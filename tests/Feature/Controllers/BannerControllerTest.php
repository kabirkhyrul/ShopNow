<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Banner;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BannerControllerTest extends TestCase
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
    public function it_displays_index_view_with_banners()
    {
        $banners = factory(Banner::class, 5)->create();

        $response = $this->get(route('banners.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.banners.index')
            ->assertViewHas('banners');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_banner()
    {
        $response = $this->get(route('banners.create'));

        $response->assertOk()->assertViewIs('app.banners.create');
    }

    /**
     * @test
     */
    public function it_stores_the_banner()
    {
        $data = factory(Banner::class)
            ->make()
            ->toArray();

        $response = $this->post(route('banners.store'), $data);

        $this->assertDatabaseHas('banners', $data);

        $banner = Banner::latest('id')->first();

        $response->assertRedirect(route('banners.edit', $banner));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_banner()
    {
        $banner = factory(Banner::class)->create();

        $response = $this->get(route('banners.show', $banner));

        $response
            ->assertOk()
            ->assertViewIs('app.banners.show')
            ->assertViewHas('banner');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_banner()
    {
        $banner = factory(Banner::class)->create();

        $response = $this->get(route('banners.edit', $banner));

        $response
            ->assertOk()
            ->assertViewIs('app.banners.edit')
            ->assertViewHas('banner');
    }

    /**
     * @test
     */
    public function it_updates_the_banner()
    {
        $banner = factory(Banner::class)->create();

        $data = [
            'top_string' => $this->faker->text(255),
            'middle_string' => $this->faker->text(255),
            'bottom_string' => $this->faker->text(255),
            'url' => $this->faker->url,
            'top_position' => $this->faker->boolean,
        ];

        $response = $this->put(route('banners.update', $banner), $data);

        $data['id'] = $banner->id;

        $this->assertDatabaseHas('banners', $data);

        $response->assertRedirect(route('banners.edit', $banner));
    }

    /**
     * @test
     */
    public function it_deletes_the_banner()
    {
        $banner = factory(Banner::class)->create();

        $response = $this->delete(route('banners.destroy', $banner));

        $response->assertRedirect(route('banners.index'));

        $this->assertDeleted($banner);
    }
}
