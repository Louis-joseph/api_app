<?php

namespace App\DataFixtures;


use App\Entity\Foyc;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 10; $i++) {
            $product = new Foyc();

            $product->setNom('nom ' . $i);
            $product->setCategorie('categorie ' . $i);
            $product->setDateDate(new \DateTime('2020-08-31 00:00:00'));
            $product->setAge('18' . $i);
            $product->setImage('image' . $i);
            $product->setDescription('description ' . $i);
            $manager->persist($product);


            $manager->flush();
        }
    }
}
