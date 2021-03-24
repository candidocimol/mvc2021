<?php

/**
 * Configuração geral
 */
 /**Caminho da pasta raiz */
 define('PATH', dirname(__FILE__));
 /**Caminho URL página inical */
 define('HOME_URI', 'http://127.0.0.1/CIMOL/mvc/');
 define('IMAGE_URI', HOME_URI.'view/imagens/');


/**INFORMAÇÕES PARA CONEXAO COM O BANCO DE DADOS */
// SGBD em uso
define( 'SGBD', 'mysql' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
//define( 'DB_NAME', 'mvc' );
define( 'DBNAME', 'mvc' );
// Usuário do DB
define( 'DBUSER', 'root' );

// Senha do DB
define( 'DBPASSWORD', '' );
// Charset da conexão PDO
define( 'DBCHARSET', 'utf8' );


define('DEFAULT_PASS', '12345');