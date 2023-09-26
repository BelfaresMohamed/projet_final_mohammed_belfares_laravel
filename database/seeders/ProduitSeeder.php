<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'titre'=>'img1',
            'prix'=>50,
            'image'=>'img1.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img2',
            'prix'=>50,
            'image'=>'img2.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img3',
            'prix'=>50,
            'image'=>'img3.jpg',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img4',
            'prix'=>50,
            'image'=>'img4.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img5',
            'prix'=>50,
            'image'=>'img5.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img6',
            'prix'=>50,
            'image'=>'img6.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img7',
            'prix'=>50,
            'image'=>'img7.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img8',
            'prix'=>50,
            'image'=>'img8.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img9',
            'prix'=>50,
            'image'=>'img9.jpg',
            'createur'=>1,
            'stock'=>52,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img10',
            'prix'=>50,
            'image'=>'img10.jpg',
            'createur'=>1,
            'stock'=>30,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img11',
            'prix'=>50,
            'image'=>'img11.jpg',
            'createur'=>1,
            'stock'=>111,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img12',
            'prix'=>50,
            'image'=>'img12.jpg',
            'createur'=>1,
            'stock'=>15,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img13',
            'prix'=>50,
            'image'=>'img13.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img14',
            'prix'=>50,
            'image'=>'img14.jpg',
            'createur'=>1,
            'stock'=>22,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'img16',
            'prix'=>50,
            'image'=>'img16.jpg',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p17',
            'prix'=>90,
            'image'=>'img17.jpg',
            'createur'=>1,
            'stock'=>25,
            'categorie'=>'Chaise en bois',
        ]);
        Produit::create([
            'titre'=>'p18',
            'prix'=>50,
            'image'=>'img18.jpg',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en fer',
        ]);
        Produit::create([
            'titre'=>'p19',
            'prix'=>50,
            'image'=>'img19.jpg',
            'createur'=>1,
            'stock'=>22,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p20',
            'prix'=>50,
            'image'=>'img20.jpg',
            'createur'=>1,
            'stock'=>55,
            'categorie'=>'Chaise en fer',
        ]);

    }
}
