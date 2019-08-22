<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0;$i<10;$i++)
        {
            $post = new Post();
            $post->setTitle('this is my first title'.rand(0,100));
            $post->setBody('this is my first body'.rand(0,100));
            $post->setTime(new \DateTime());
            $manager->persist($post);
        }

        $manager->flush();
    }
}
