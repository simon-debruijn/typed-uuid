<?php

declare(strict_types=1);

namespace Simondebruijn\TypesUuid;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

trait WrapsUuid
{
    private readonly UuidInterface $uuid;

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function create(?UuidInterface $uuid = null): self
    {
        return new self($uuid ?? Uuid::uuid4());
    }

    public static function createFromString(string $uuid): self
    {
        return self::createFromUuid(Uuid::fromString($uuid));
    }

    public static function createFromUuid(UuidInterface $uuid): self
    {
        return new self($uuid);
    }

    public function toUuid(): UuidInterface
    {
        return $this->uuid;
    }

    public function equals(self $other): bool {
        return $this->uuid->equals($other->toUuid());
    }

    public function toString(): string
    {
        return $this->uuid->toString();
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}