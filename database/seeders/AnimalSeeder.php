<?php

namespace Database\Seeders;

use App\Models\Animals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animals::create([
            'name' => 'Babirusa',
            'image_url' => 'https://3.bp.blogspot.com/-TWHUkHz7xhE/UAhI2oVo0WI/AAAAAAAACnE/RQz6PWQJ6ro/s1600/37637.jpg',
            'history' => 'A balsam, Impatiens psittacina, or parrot flower, is a very rare impatiens species discovered in the Shan States of Upper Burma by Arthur Hedding Hildebrand, a British official. Seeds of it were presented to the Royal Gardens (Kew) in 1899 and it flowered in 1900 and a description was published in 1901 by Joseph Dalton Hooker who gave the common name of "cockatoo balsam". The specimen in Kew did not set seed but the capsules are said not to explode and disperse seeds as in many Impatiens.',
            'description' => 'The plant is erect and branches profusely and grows compactly to a height of about half a metre. Like other Impatiens species it has thick stems, the leaves have a serrulate margin. The flower is light purple and carmine red. The lateral sepals are orbicular and light green. The lower sepal is bulbous and narrows into a hooked spur tipped in carmine. The dorsal petal is orbicular and hooded while the lateral united petals are long. This species of Impatiens is known in Thai as thian nok kaeo (เทียนนกแก้ว; IPA: [tʰian nók kɛ̂w]), which translates to "parrot impatiens"'
        ]);
    }
}
