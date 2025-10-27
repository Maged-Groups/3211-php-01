<?php
namespace App\Traits;

trait Str
{
    public static function humanize(string $string): string
    {
        return 'humanize';
    }
    public static function humanizePlural(string $string): string
    {
        return 'humanizePlural';
    }
    public static function humanizeSingular(string $string): string
    {
        return 'humanizeSingular';
    }
    public static function sanitize(string $string): string
    {
        return 'sanitize';
    }
    public static function slug(string $string): string
    {
        return 'slug';
    }

}