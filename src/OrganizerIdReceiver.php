<?php

declare(strict_types=1);

namespace Simondebruijn\TypesUuid;

final class OrganizerIdReceiver
{
    public function __construct(
        public OrganizerId $organizerId
    )
    {
    }

    public function printOrganizerId(): void
    {
        echo $this->organizerId->toString() . PHP_EOL;
    }

}