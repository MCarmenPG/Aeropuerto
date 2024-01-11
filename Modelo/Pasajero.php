<?php
    class Pasajero{
        private int $idPasajero;
        private string $nombre;
        private string $apellidos;
        private int $edad;
        private int $idVuelo;
      
        public function getIdPasajero(): int{
                return $this->idPasajero;
        }
        public function setIdPasajero(int $idPasajero){
                $this->idPasajero = $idPasajero;             
        }
        public function getNombre(): string{
                return $this->nombre;
        }
        public function setNombre(string $nombre){
                $this->nombre = $nombre;
        }
        public function getApellidos(): string{
                return $this->apellidos;
        }
        public function setApellidos(string $apellidos){
                $this->apellidos = $apellidos;
        }
        public function getEdad(): int{
                return $this->edad;
        }     
        public function setEdad(int $edad){
                $this->edad = $edad;
        }
        public function getIdVuelo(): int{
                return $this->idVuelo;
        }
        public function setIdVuelo(int $idVuelo){
                $this->idVuelo = $idVuelo;
        }
    }


?>