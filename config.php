<?php
/**
 * Configuração centralizada do sistema
 * Este arquivo deve ser incluído em todos os scripts que precisam de acesso ao banco de dados
 */

// Carregar configurações do ambiente
$env_config = require_once __DIR__ . '/env.php';

// Definir constantes do banco de dados
define('DB_HOST', $env_config['DB_HOST']);
define('DB_USER', $env_config['DB_USER']);
define('DB_PASS', $env_config['DB_PASS']);
define('DB_NAME', $env_config['DB_NAME']);
define('DB_PORT', $env_config['DB_PORT']);

// Definir constantes do ambiente
define('APP_ENV', $env_config['APP_ENV']);
define('APP_DEBUG', $env_config['APP_DEBUG']);

// Função para obter conexão MySQLi
function getDatabaseConnection() {
    static $connection = null;
    
    if ($connection === null) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        
        if (!$connection) {
            if (APP_DEBUG) {
                die("Cannot Establish A Secure Connection To The Host Server At The Moment! Error: " . mysqli_connect_error());
            } else {
                die("Cannot Establish A Secure Connection To The Host Server At The Moment!");
            }
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
            if (APP_DEBUG) {
                die('Cannot Establish A Secure Connection To The Host Server At The Moment! Error: ' . $e->getMessage());
            } else {
                die('Cannot Establish A Secure Connection To The Host Server At The Moment!');
            }
        }
    }
    
    return $pdo;
}

// Inicializar conexões globais para compatibilidade com código existente
$connection = getDatabaseConnection();
$db = getPDOConnection();

?>