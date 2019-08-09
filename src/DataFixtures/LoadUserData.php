<?php


namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class LoadUserData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setUserName("Lily");
        $user->setMail("user@gmail.com");
        $user->setPassword("root");
        $user->setRole(1);

        $manager->persist($user);

        $manager->flush();
    }
}