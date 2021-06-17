<?php

namespace Framework\Session;

class Session
{

    public function __construct()
    {
    }


    public function setName($name): void
    {
        session_name($name);
    }

    public function getName(): string
    {
        return session_name();
    }

    public function setId($id): void
    {
        session_id($id);
    }

    public function getId(): string
    {
        return session_id();
    }

    public function array(): array
    {
        return $_SESSION = [];
    }

    public function cookieExists($key = null): bool
    {
        return isset($_COOKIE[$key]);
    }

    public function sessionExists(): bool
    {
        return isset($_SESSION);
    }

    public function start(): void
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function setSavePath($savePath): void
    {
        session_save_path($savePath);
    }

    public function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function contains($key): bool
    {
        return isset($_SESSION[$key]);
    }


    public function delete($key): void
    {
        unset($_SESSION[$key]);
    }
}
