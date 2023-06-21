<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1; $i <= 10; $i++) {
            $task = new Task;
            $task->setTitle('Ma tâche n°' . $i);
            $task->setDescription('Ma description');
            $task->setDone(false);

            $manager->persist($task);

            $user = new User;
            $user->setEmail('user' . $i . '@gmail.com')
                ->setPassword('password')
                ->setApiKey('myapikey');

            $manager->persist($user);
        }
        $manager->flush();
    }
}
