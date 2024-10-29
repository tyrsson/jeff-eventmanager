<?php

declare(strict_types=1);

use Listener\CompanyOne;
use Listener\CompanyTwo;
use Listener\CompanyThree;

$rmId = 31206;
$site_id = 1195;
$tmpProspectId = 8163727;

$data = [
    CompanyOne::class   => [
        'resellerId' => 1,
        'subject' => 'New Contact',
        'description' => 'You have a new contact - Company One contact',
        'rmId' => 31204,
        'site_id' => 1191,
        'domainId' => 'company-one.com',
        'firstName' => 'Company',
        'lastName' => 'One',
        'type' => 'newProspect',
        'contextId' => 8163725
    ],
    CompanyTwo::class   => [
        'resellerId' => 2,
        'subject' => 'New Contact',
        'description' => 'You have a new contact - Company Two contact',
        'rmId' => 31205,
        'site_id' => 1192,
        'domainId' => 'company-two.com',
        'firstName' => 'Company',
        'lastName' => 'Two',
        'type' => 'newProspect',
        'contextId' => 8163726
    ],
    CompanyThree::class => [
        'resellerId' => 3,
        'subject' => 'New Contact',
        'description' => 'You have a new contact - Company Three contact',
        'rmId' => 31206,
        'site_id' => 1193,
        'domainId' => 'company-three.com',
        'firstName' => 'Company',
        'lastName' => 'Three',
        'type' => 'newProspect',
        'contextId' => 8163727
    ],
];

return $data;