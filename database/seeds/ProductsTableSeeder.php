<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->delete();
      Product::create([
        'id' => 1,
        'name' => 'Smart TV SAMSUNG',
        'price' => 15387.99,
        'description' => 'Aplicaciones android',
        'state' => 1,
        'category_id' => 2
      ]);
      Product::create([
        'id' => 2,
        'name' => 'Beats Mixr',
        'price' => 3999.99,
        'description' => 'By Dr.dre & David Guetta',
        'state' => 1,
        'category_id' => 3
      ]);
      Product::create([
        'id' => 3,
        'name' => 'DVD Sony',
        'price' => 1000,
        'description' => 'Lector de BluRay',
        'state' => 1,
        'category_id' => 4
      ]);
      Product::create([
        'id' => 4,
        'name' => 'Alienware area 51',
        'price' => 45999.99,
        'description' => 'Aplicaciones para realidad aumentada',
        'state' => 1,
        'category_id' => 5
      ]);
      Product::create([
        'id' => 5,
        'name' => 'TV Samsung 65 Pulgadas 4K Ultra HD SMART TV LED UN65MU6100',
        'price' => 19999,
        'description' => 'Smart TV, 4K Ultra HD 3840 x 2160 píxeles, Con HDR que muestra imágenes más reales y con mayor rango de detalles',
        'state' => 1,
        'category_id' => 2
      ]);
      Product::create([
        'id' => 6,
        'name' => 'TV LG 55 Pulgadas 4K Ultra HD Smart TV LED 55UJ6350',
        'price' => 12499,
        'description' => 'Su resolución cuatro veces mayor que Full HD te permite disfrutar del mejor color brillo y contraste',
        'state' => 1,
        'category_id' => 2
      ]);
      Product::create([
        'id' => 7,
        'name' => 'TV Hisense 55 Pulgadas 4K Ultra HD Smart TV LED 55DU6070',
        'price' => 9799,
        'description' => 'El Sonido Surround te brinda una extraordinaria calidad de audio con sus bocinas incorporadas',
        'state' => 1,
        'category_id' => 2
      ]);
      Product::create([
        'id' => 8,
        'name' => 'Laptop Acer Aspire Nitro 5 Gaming Intel Core i5 8GB RAM 256GB SSD',
        'price' => 9799,
        'description' => 'Pantalla de 15.6 pulgadas, Teclado en inglés, Con Windows 10',
        'state' => 1,
        'category_id' => 5
      ]);
      Product::create([
        'id' => 9,
        'name' => 'Smartphone Samsung Galaxy S8 Plus 64GB Negro Desbloqueado',
        'price' => 17999,
        'description' => 'Pantalla de 6.2 pulgadas, Cámara principal de 12mp, Memoria interna de 64GB',
        'state' => 1,
        'category_id' => 1
      ]);
      Product::create([
        'id' => 10,
        'name' => 'Smartphone Motorola Moto Z Play 32 GB Negro-Gris Desbloqueado',
        'price' => 7997,
        'description' => 'Diseño distinguido y práctico, Fotos nítidas y brillantes, Agilidad y eficiencia al utilizar tus aplicaciones preferidas',
        'state' => 1,
        'category_id' => 1
      ]);
      Product::create([
        'id' => 11,
        'name' => 'Consola Xbox One S 500 GB más Tarjeta Live 3 Meses Reacondicionada',
        'price' => 4799,
        'description' => 'Cuenta con una unidad de almacenamiento de 500 BM, Incluye Tarjeta Live 3 Meses, Experimenta al máximo tus videojuegos favoritos',
        'state' => 1,
        'category_id' => 6
      ]);
      Product::create([
        'id' => 12,
        'name' => 'Batería de cocina FlavorStone Master Set de 4 piezas Azul más 2 cuchillos con Set para Ensaladas Salad Chef Smart de regalo',
        'price' => 2795,
        'description' => 'Fabricado en materiales de alta calidad, Corte, pique y rabane en instantes de manera fácil, Garantía de 10 años',
        'state' => 1,
        'category_id' => 7
      ]);
      Product::create([
        'id' => 13,
        'name' => 'Wafflera Estrella de Muerte Star Wars Plata',
        'price' => 999,
        'description' => 'Plancha antiadherente, Diseño divertido, Práctico tamaño',
        'state' => 1,
        'category_id' => 8
      ]);
    }
}
