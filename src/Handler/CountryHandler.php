<?php

namespace App\Handler;

use App\Repository\CountryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CountryHandler extends BaseHandler
{
    public function __construct(
        CountryRepository $repository,
        SerializerInterface $serializer,
        UserPasswordHasherInterface $passwordEncoder,
        EntityManagerInterface $em
    ) {
        parent::__construct($repository, $serializer, $passwordEncoder, $em);
    }
}
