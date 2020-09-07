<?php

namespace App\DataFixtures;

use App\Entity\User; 
use Doctrine\Persistence\ObjectManager;

class Userfixture extends BaseFixture 
{
    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(10, 'main_users', function($i){
            $user = new User();
            $user->setEmail(sprintf('user%d@example.com', $i));
            $user->setPassword('user'); 
            $user->setFirstName($this->faker->firstName);
            $user->setLastName($this->faker->firstName);

            return $user;
        });

        $manager->flush();
    }
}
