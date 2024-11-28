<?php

namespace App\Factory;

use App\Entity\SmingSetting;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<SmingSetting>
 */
final class SmingSettingFactory extends PersistentProxyObjectFactory
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
        return SmingSetting::class;
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
            'hours_per_day' => self::faker()->randomFloat(),
            'hours_per_month' => self::faker()->randomFloat(),
            'hours_per_week' => self::faker()->randomFloat(),
            'hours_per_year' => self::faker()->randomFloat(),
            'start_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(SmingSetting $smingSetting): void {})
        ;
    }
}
