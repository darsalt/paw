<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Traemos los datos del vendedor
        $vendedor = User::where('id', 2)->first();
        // Traemos una categoria de manera aleatoria de la BD
        $categoria = Categoria::inRandomOrder()->first();

        return [
            'nombre' => $this->faker->sentence(), // Una linea aleatoria
            'descripcion' => $this->faker->paragraph(), // Un párrafo aleatorio
            'precio' => $this->faker->randomFloat(2, 2000, 100000), // Numero Flotante aleatorio en el rango [2000; 100000] con 2 decimales
            'imagen' => $this->faker->imageUrl(640, 480), // URL de una imagen aleatoria con dimension 640x480
            'categoria_id' => $categoria->id, // FK de la categoria extraida anteriormente
            'vendedor_id' => $vendedor->id, // FK del vendedor extraido anteriormente
        ];
    }
}
