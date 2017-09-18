<?php
/**
 * Connection Factory Interface
 *
 */
namespace App\Interfaces;

interface ConnectionFactoryInterface
{
    public static function create(array $config);
}
