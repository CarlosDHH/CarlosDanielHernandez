<?php
//creamos la instancia de coneccion(un atributo para manipular la coneccion)
private $connection;

//creamos el constructor de la clase coneccion en este metodo conectamos con la bd 
public function __construct(){
    //lamamos alarchivo de configuraccion
    require_once('./config.php')
    //creamos nuestra coneccion a la base de datos 
    $this->conecction=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    //manejo de errores
    if($this->connection_error;){
        die('Error al conectar con la base de datos : ' $this->connection->connect_error;)
    }
}
//Metodo para llegar a la coneccion 

?>