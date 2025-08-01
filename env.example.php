<?php
/**
 * Arquivo de exemplo de configuração de ambiente
 * 
 * INSTRUÇÕES:
 * 1. Faça uma cópia deste arquivo e renomeie para 'env.php'
 * 2. Preencha com suas credenciais reais
 * 3. Nunca faça commit do arquivo 'env.php' no Git
 */

// Configurações do Banco de Dados
return [
    // Para desenvolvimento local, use '127.0.0.1' ou 'localhost'
    // Para Hostinger, use 'localhost'
    'DB_HOST' => 'localhost',
    
    // Suas credenciais do banco de dados
    'DB_USER' => 'seu_usuario_aqui',
    'DB_PASS' => 'sua_senha_aqui',
    'DB_NAME' => 'nome_do_banco_aqui',
    'DB_PORT' => 3306,
    
    // Configurações do Ambiente
    // Valores possíveis: 'development', 'production'
    'APP_ENV' => 'production',
    
    // Mostrar erros detalhados? true para desenvolvimento, false para produção
    'APP_DEBUG' => false
];
?>