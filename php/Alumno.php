<?php
    class Alumno {
        private $nombre = '';
        private $edad = 0;
        private $curso = 0;

        // Constructor

        public function __construct($nombre, $edad, $curso) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->curso = $curso;
        }

        // Métodos Get

        public function getNombre() {
            return $this->nombre;
        }

        public function getEdad() {
            return $this->edad;
        }
        
        public function getCurso() {
            return $this->curso;
        }

        
        // Métodos Set

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }
        
        public function setCurso($curso) {
            $this->curso = $curso;
        }

        // Otros métodos   
        
        public function mostrarNombre() {
            if ($this->nombre != '') {
                echo ('<h2>' . $this->getNombre() . '</h2>');
            } else {
                echo ('El nombre no ha sido asignado');
            };            
        } 
        
        // Función que muestra todos los datos.
        public function mostrarDatos() {
            if ($this->nombre != '') {
                echo ('<h2>Nombre</h2>');
                echo ('<h3>' . $this->getNombre() . '</h3>');
            } else {
                echo ('El nombre no ha sido asignado');
            };
            
            if ($this->edad != '') {
                echo ('<h2>Edad</h2>');
                echo ('<h3>' . $this->getEdad() . '</h3>');
                if ($this->esMayorEdad()) {
                    echo('<h3>(Mayor Edad)</h3>');
                } else {
                    echo('<h3>(Menor Edad)</h3>');
                };
            } else {
                echo ('La edad no ha sido asignada');
            };

            if ($this->curso != '') {
                echo ('<h2>Curso</h2>');
                echo ('<h3>' . $this->getCurso() . 'º</h3>');
            } else {
                echo ('El curso no ha sido asignado');
            };
        }
        
        // Función que devuelve si es mayor de esas o no.
        public function esMayorEdad() {
            if ($this->edad >= 18) {
                return true;
            } else {
                return false;
            };            
        }  

    };
?>