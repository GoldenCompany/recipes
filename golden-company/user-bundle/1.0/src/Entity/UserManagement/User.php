<?php

namespace App\Entity\UserManagement;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserManagement\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use GoldenCompany\UserBundle\Entity\User as BaseUser;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user_management_user`")
 */
class User extends BaseUser
{

}
