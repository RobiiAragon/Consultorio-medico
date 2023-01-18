
<?php 
include('../conexionDB.php');

class cita extends conexionDB{
        private $nombre;
        private $fecha;
        private $horario;
        private $numero_telefono;

    
      public function getAllcita(){
        $result = $this->conectar();
        if($result){
           $dataset=$this->consultar("SELECT * FROM agendar_cita;");
        }else{
            echo "no hay datos ";
            $dataset="vacio";
        }
        return $dataset;
      }
    public function setcita($txtNombre,$txtFecha,$txthorario,$txtnumero_telefono){
      $sql= "insert into agendar_cita(nombre,fecha,horario,numero_telefono) 
      values('".$txtNombre."','".$txtFecha."','".$txthorario."','".$txtnumero_telefono."')";
      echo $sql;
      $result = $this->conectar();

      if($result){
        $newid=$this->insertar($sql);
      }else{
         $newid=0;
      }
      
      return $newid;
      header('C:\xampp\htdocs\Consultorio\Consultorio-medico\index.html');
    }
}
?>
