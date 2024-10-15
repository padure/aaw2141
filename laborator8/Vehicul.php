<?php
    interface Vehicul{
        public function porneste();
        public function opreste();
    }

    abstract class VehiculMotorizat implements Vehicul{
        protected $marca;
        protected $model;
        protected $anFabricatie;
        protected $capacitateMotor;

        public function __construct($marca, $model, $anFabricatie, $capacitateMotor){
            $this->marca = $marca;
            $this->model = $model;
            $this->anFabricatie = $anFabricatie;
            $this->capacitateMotor = $capacitateMotor;
        }

        public function porneste(){
            echo "$this->marca porneste";
        }

        public function opreste(){
            echo "$this->marca opreste";
        }

        abstract public function tipCombustibil();
        
        public function afiseazaDetalii(){
            echo "$this->marca, $this->model, $this->anFabricatie, $this->capacitateMotor";
        }
    }

    class Masina extends VehiculMotorizat {
        public function tipCombustibil(){
            return "Benzina";
        }
    }

    class Motocicleta extends VehiculMotorizat{
        public function tipCombustibil(){
            return "Motorina";
        }
    }

    class GestionareVehicule{
        private static $vehicole = [];

        public static function adauga(VehiculMotorizat $vehiculMotorizat){
            self::$vehicole[] = $vehiculMotorizat;
        }

        public static function afiseaza(){
            foreach(self::$vehicole as $vehicul){
                $vehicul->afiseazaDetalii();
                echo "<hr>";
            }
        }
    }

    
?>