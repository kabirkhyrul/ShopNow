<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\GeneralSetting;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GeneralSettingControllerTest extends TestCase
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
    public function it_displays_index_view_with_general_settings()
    {
        $generalSettings = factory(GeneralSetting::class, 5)->create();

        $response = $this->get(route('general-settings.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.general_settings.index')
            ->assertViewHas('generalSettings');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_general_setting()
    {
        $response = $this->get(route('general-settings.create'));

        $response->assertOk()->assertViewIs('app.general_settings.create');
    }

    /**
     * @test
     */
    public function it_stores_the_general_setting()
    {
        $data = factory(GeneralSetting::class)
            ->make()
            ->toArray();

        $response = $this->post(route('general-settings.store'), $data);

        $this->assertDatabaseHas('general_settings', $data);

        $generalSetting = GeneralSetting::latest('id')->first();

        $response->assertRedirect(
            route('general-settings.edit', $generalSetting)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_general_setting()
    {
        $generalSetting = factory(GeneralSetting::class)->create();

        $response = $this->get(route('general-settings.show', $generalSetting));

        $response
            ->assertOk()
            ->assertViewIs('app.general_settings.show')
            ->assertViewHas('generalSetting');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_general_setting()
    {
        $generalSetting = factory(GeneralSetting::class)->create();

        $response = $this->get(route('general-settings.edit', $generalSetting));

        $response
            ->assertOk()
            ->assertViewIs('app.general_settings.edit')
            ->assertViewHas('generalSetting');
    }

    /**
     * @test
     */
    public function it_updates_the_general_setting()
    {
        $generalSetting = factory(GeneralSetting::class)->create();

        $data = [
            'name' => $this->faker->name,
            'logo' => $this->faker->text(255),
            'address' => $this->faker->text(255),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'facebook' => $this->faker->text(255),
            'twitter' => $this->faker->text(255),
            'instagram' => $this->faker->text(255),
            'pinterest' => $this->faker->text(255),
            'top_bar_offer' => $this->faker->text(255),
            'currency' => $this->faker->currencyCode,
            'shipping_cost' => $this->faker->randomNumber(2),
        ];

        $response = $this->put(
            route('general-settings.update', $generalSetting),
            $data
        );

        $data['id'] = $generalSetting->id;

        $this->assertDatabaseHas('general_settings', $data);

        $response->assertRedirect(
            route('general-settings.edit', $generalSetting)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_general_setting()
    {
        $generalSetting = factory(GeneralSetting::class)->create();

        $response = $this->delete(
            route('general-settings.destroy', $generalSetting)
        );

        $response->assertRedirect(route('general-settings.index'));

        $this->assertDeleted($generalSetting);
    }
}
