<?php

namespace App\Factory;

use App\Entity\FamilyAllowance;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<FamilyAllowance>
 */
final class FamilyAllowanceFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return FamilyAllowance::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'end_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'start_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'total' => self::faker()->randomFloat(),
            'total_per_person' => self::faker()->randomFloat(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(FamilyAllowance $familyAllowance): void {})
        ;
    }
}
