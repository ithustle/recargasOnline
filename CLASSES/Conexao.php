<?php

class Conexao {
    
    private $dsn = 'mysql:host=localhost, dbname=recargas';
    private $user = 'root';
    private $pass = '';
    private $cnn;
    
    public function __construct() {
        try{
            
            if ($this->cnn == NULL){
            $cnn = parent::__construct($this->dsn, $this->user, $this->pass);
            $this->handle = $cnn;
            
            return $this->handle;
            }
            
        } catch (PDOException $e){
            throw new Exception("Mensagem: ".$e->getMessage(). "Código: ".$e->getCode());
            return FALSE;

        }
    }
}

?>
