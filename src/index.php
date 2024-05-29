<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Simondebruijn\TypedUuid\OrganizerId;
use Simondebruijn\TypedUuid\OrganizerIdReceiver;
use Simondebruijn\TypedUuid\UuidReceiver;
// use \Simondebruijn\TypedUuid\UserId;

$organizerId1 = OrganizerId::create();
$organizerId2 = OrganizerId::createFromString("44760acc-180a-44fa-a5f3-67f6c092f9a7");
$organizerId3 = OrganizerId::createFromString("44760acc-180a-44fa-a5f3-67f6c092f9a7");
$organizerId4 = OrganizerId::createFromUuid(Uuid::fromString("44760acc-180a-44fa-a5f3-67f6c092f9a7"));

var_dump(
    $organizerId1,
    $organizerId2,
    $organizerId3,
    $organizerId4,
);

$organizerIdReceiver = new OrganizerIdReceiver($organizerId1);
// The next line will throw type error
// $organizerIdReceiver2 = new OrganizerIdReceiver(UserId::create());
$uuidReceiver = new UuidReceiver($organizerId1->toUuid());




