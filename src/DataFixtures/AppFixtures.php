<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setFirstname('olivier');
        $user->setLastname('toussaint');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->encoder->encodePassword($user, 'secret'));
        $user->setEmail('olivier@toussaint.fr');

        $manager->persist($user);

        $post = new Post();
        $post->setTitle('test');
        $post->setContent('test');
        $post->setCreateAt(new \DateTime('now'));
        $post->setUpdateAt(new \DateTime('now'));
        $post->setPublishAt(new \DateTime('now'));
        $post->setUser($user);

        $manager->persist($post);
        $manager->flush();
    }
}
