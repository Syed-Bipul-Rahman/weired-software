<?php

namespace Database\Seeders;

use App\Models\Plants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plants::create([
            'name' => 'Impatiens psittacina',
            'image_url' => 'https://i.ytimg.com/vi/z7Exgf6CJQE/maxresdefault.jpg',
            'history' => 'A balsam, Impatiens psittacina, or parrot flower, is a very rare impatiens species discovered in the Shan States of Upper Burma by Arthur Hedding Hildebrand, a British official. Seeds of it were presented to the Royal Gardens (Kew) in 1899 and it flowered in 1900 and a description was published in 1901 by Joseph Dalton Hooker who gave the common name of "cockatoo balsam". The specimen in Kew did not set seed but the capsules are said not to explode and disperse seeds as in many Impatiens.',
            'description' => 'The plant is erect and branches profusely and grows compactly to a height of about half a metre. Like other Impatiens species it has thick stems, the leaves have a serrulate margin. The flower is light purple and carmine red. The lateral sepals are orbicular and light green. The lower sepal is bulbous and narrows into a hooked spur tipped in carmine. The dorsal petal is orbicular and hooded while the lateral united petals are long. This species of Impatiens is known in Thai as thian nok kaeo (เทียนนกแก้ว; IPA: [tʰiːan nók kɛ̂ːw]), which translates to "parrot impatiens"'
        ]);
    }
}
