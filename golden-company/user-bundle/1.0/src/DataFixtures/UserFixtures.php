<?php

namespace App\DataFixtures;

use App\Entity\UserManagement\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $password = $this->encoder->encodePassword($admin, 'admin123#');
        $admin->setPassword($password);
        $admin->setEmail('admin@admin.com');
        $admin->addRole('ROLE_ADMIN');
        $manager->persist($admin);

        $manager->flush();
    }
}
