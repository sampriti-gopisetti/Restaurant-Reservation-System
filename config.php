<?php
// Global config and URL helper functions

if (!function_exists('base_url')) {
    function base_url(string $path = ''): string {
        // Detect scheme with proxy support
        $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
        $scheme = $https ? 'https' : 'http';

        // Host (support forwarded host)
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'] ?? ($_SERVER['HTTP_HOST'] ?? 'localhost');

        // Current script directory (project web root)
        $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');

        // Build base like: https://host[/dir]/
        $base = $scheme . '://' . $host . ($scriptDir !== '' ? $scriptDir . '/' : '/');

        if ($path === '' || $path === '/') {
            return rtrim($base, '/') . '/';
        }
        return $base . ltrim($path, '/');
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string {
        return base_url($path);
    }
}

if (!function_exists('url')) {
    function url(string $path = ''): string {
        return base_url($path);
    }
}

?>
