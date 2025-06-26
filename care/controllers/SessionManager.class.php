<?php
class SessionManager
{
    public static function startSession()
    {
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_strict_mode', 1);

        session_set_cookie_params([
            'lifetime' => 1800,
            'domain' => 'localhost',
            'path' => '/',
            'secure' => isset($_SERVER['HTTPS']), // ou forçar true em produção
            'httponly' => true
        ]);

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        self::checkRegeneration();
    }

    private static function checkRegeneration()
    {
        $interval = 60 * 30; // 30 minutos

        if (isset($_SESSION['user_id'])) {
            if (!isset($_SESSION['last_regeneration']) || time() - $_SESSION['last_regeneration'] >= $interval) {
                self::regenerateId(true);
            }
        } else {
            if (!isset($_SESSION['last_regeneration']) || time() - $_SESSION['last_regeneration'] >= $interval) {
                self::regenerateId();
            }
        }
    }

    private static function regenerateId($loggedIn = false)
    {
        session_regenerate_id(true);

        if ($loggedIn && isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
            $newSessionId = session_create_id();
            session_id($newSessionId . '_' . $userId);
        }

        $_SESSION['last_regeneration'] = time();
    }

    public static function setUserSession(int $userId)
    {
        $_SESSION['user_id'] = $userId;
        $_SESSION['last_regeneration'] = time();
    }

    public static function destroy()
    {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();
    }

    public static function isAuthenticated(): bool
    {
        return isset($_SESSION['user_id']);
    }

    public static function getUserId(): ?int
    {
        return $_SESSION['user_id'] ?? null;
    }
}
