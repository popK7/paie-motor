<?php

namespace App\Factory;

use App\Entity\EmployeeCategoryEnum;
use App\Entity\Notice;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Notice>
 */
final class NoticeFactory extends PersistentProxyObjectFactory
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
        return Notice::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'category_user' => self::faker()->randomElement(EmployeeCategoryEnum::cases()),
            'max_year' => self::faker()->randomFloat(),
            'min_year' => self::faker()->randomFloat(),
            'notice_months' => self::faker()->randomFloat(),
            'start_at' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Notice $notice): void {})
        ;
    }
}
