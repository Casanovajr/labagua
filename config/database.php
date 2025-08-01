<?php
/**
 * Configuração centralizada do banco de dados
 * Este arquivo carrega as variáveis de ambiente do arquivo .env
 */

// Função para carregar variáveis do arquivo .env
function loadEnv($path = __DIR__ . '/.env') {
    if (!file_exists($path)) {
        die('Arquivo .env não encontrado em: ' . $path);
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // Pular comentários
        }
        
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        
        if (!array_key_exists($name, $_ENV)) {
            $_ENV[$name] = $value;
        }
    }
}

// Carregar variáveis de ambiente
loadEnv();

// Definir constantes do banco de dados
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_USER', $_ENV['DB_USER'] ?? '');
define('DB_PASS', $_ENV['DB_PASS'] ?? '');
define('DB_NAME', $_ENV['DB_NAME'] ?? '');
define('DB_PORT', $_ENV['DB_PORT'] ?? 3306);

// Função para obter conexão MySQLi
function getDatabaseConnection() {
    global $connection;
    
    if (!isset($connection) || !$connection) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        
        if (!$connection) {
            die("Cannot Establish A Secure Connection To The Host Server At The Moment! Error: " . mysqli_connect_error());
        }
        
        // Definir charset para UTF-8
        mysqli_set_charset($connection, 'utf8');
    }
    
    return $connection;
}

// Função para obter conexão PDO
function getPDOConnection() {
    static $pdo = null;
    
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8;port=" . DB_PORT;
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]);
        } catch (PDOException $e) {
            die('Cannot Establish A Secure Connection To The Host Server At The Moment! Error: ' . $e->getMessage());
        }
    }
    
    return $pdo;
}

// Inicializar conexões globais para compatibilidade com código existente
$connection = getDatabaseConnection();
$db = getPDOConnection();

?>