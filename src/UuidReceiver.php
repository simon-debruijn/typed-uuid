<?php

declare(strict_types=1);

namespace Simondebruijn\TypesUuid;

use Ramsey\Uuid\UuidInterface;

final class UuidReceiver
{
    public function __construct(
        public UuidInterface $organizerId
    )
    {
    }

    public function printOrganizerId(): void
    {
        echo $this->organizerId->toString() . PHP_EOL;
    }

}