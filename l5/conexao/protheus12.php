<?php
/*
define('DB_HOST'        , "172.16.10.30");
define('DB_USER'        , "ricky.moraes");
define('DB_PASSWORD'    , "rmoraes@21");
define('DB_NAME'        , "TM_VAL");
*/

define('DB_HOST'        , "172.16.10.9");
define('DB_USER'        , "ricky.moraes");
define('DB_PASSWORD'    , "Planeta10");
define('DB_NAME'        , "Protheus12");

define('DB_DRIVER'      , "sqlsrv");


class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        $pdoConfig  = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
        $pdoConfig .= "Database=".DB_NAME.";";

        try {
            if(!isset($connection)){
                $connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
         } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
         }
     }
}

function conectarp12() {


   
   try{
   
       $conexao    = Conexao::getConnection();
   
    }catch(Exception $e){
   
       echo $e->getMessage();
       exit;
   
    }
    return $conexao;
   }
// exemplo
/*
try{

    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("SELECT B1_COD nome, B1_PESO preco, B1_PESBRU quantidade FROM SB1010 produto");
    $produtos = $query->fetchAll();
    print_r("<pre>");
    print_r($produtos);
    print_r("</pre>");

 }catch(Exception $e){

    echo $e->getMessage();
    exit;

 }

*/

 ?>