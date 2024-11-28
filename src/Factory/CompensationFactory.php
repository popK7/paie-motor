<?php

namespace App\Factory;

use App\Entity\Compensation;
use App\Entity\CompensationCategoryEnum;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Compensation>
 */
final class CompensationFactory extends PersistentProxyObjectFactory
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
        return Compensation::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'category' => self::faker()->randomElement(CompensationCategoryEnum::cases()),
            'end_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'max_year' => self::faker()->randomFloat(),
            'min_year' => self::faker()->randomFloat(),
            'pay_hours' => self::faker()->randomFloat(),
            'start_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Compensation $compensation): void {})
        ;
    }
}
