<?php
 
namespace Database\Factories;
 
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $title = $this->faker->name() . ' ' . $this->faker->sentence($this->faker->numberBetween(1, 5));
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->sentence($this->faker->numberBetween(0, 500)),
            'uid' => Str::uuid(),
        ];
    }
}