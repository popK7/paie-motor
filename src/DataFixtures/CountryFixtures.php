<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $countries = [
            ['name' => 'Congo(Rdc)', 'code' => "CON"],
            ['name' => 'Sénegal', 'code' => "SEN"],
            ['name' => 'Cote d\'ivoire', 'code' => "COV"],
            ['name' => 'Maroc', 'code' => "MAR"],
        ];

        foreach ($countries as $key => $item) {

            $country = new Country();
            $country->setName($item['name']);
            $country->setCode($item['code']);
            $manager->persist($country);
        }

        $manager->flush();
    }
}
