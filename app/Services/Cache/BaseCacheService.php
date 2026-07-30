<?php

namespace App\Services\Cache;

use Closure;
use Illuminate\Support\Facades\Cache;

class BaseCacheService
{
    /**
     * Get data from cache or execute the callback and cache the result.
     */
    public function remember(
        string $key,
        int $seconds,
        Closure $callback
    ): mixed {
        return Cache::remember(
            $key,
            now()->addSeconds($seconds),
            $callback
        );
    }

    /**
     * Store data.
     */
    public function put(
        string $key,
        mixed $value,
        int $seconds
    ): bool {
        return Cache::put(
            $key,
            $value,
            now()->addSeconds($seconds)
        );
    }

    /**
     * Get cached value.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return Cache::get($key, $default);
    }

    /**
     * Remove cache.
     */
    public function forget(string $key): bool
    {
        return Cache::forget($key);
    }

    /**
     * Check if cache exists.
     */
    public function has(string $key): bool
    {
        return Cache::has($key);
    }

    /**
     * Clear everything.
     */
    public function flush(): bool
    {
        return Cache::flush();
    }
}