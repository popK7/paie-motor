<?php

namespace App\Factory;

use App\Entity\Tax;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Tax>
 */
final class TaxFactory extends PersistentProxyObjectFactory
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
        return Tax::class;
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
            'rate' => self::faker()->randomFloat(),
            'salary_max' => self::faker()->randomFloat(),
            'salary_min' => self::faker()->randomFloat(),
            'start_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'total_deduction' => self::faker()->randomFloat(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Tax $tax): void {})
        ;
    }
}
