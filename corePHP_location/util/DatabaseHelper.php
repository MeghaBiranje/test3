<?php
    class DatabaseHelper {
        private $connection;
        
        public function __construct() {
         $this->connection = mysqli_connect('localhost', 'root', '', 'rkit_tekdi') or die('Failed to get database connection.');
        }

        public function getCountry() {
            
            $result = mysqli_query($this->connection, "SELECT * from country");
          
            while($row = mysqli_fetch_assoc($result)) {
               
                $names[] = $row;
            }
            return $names;
        }

        public function getState($country_id){
            $result = mysqli_query($this->connection, "SELECT * from country_state where country_id= '$country_id'");
            while($row = mysqli_fetch_assoc($result)) {
               
                $names[] = $row;
            }
            return $names;
        }
        
        public function getCity($state_id){
            $result = mysqli_query($this->connection, "SELECT * from state_city where state_id= '$state_id'");
            while($row = mysqli_fetch_assoc($result)) {
               
                $names[] = $row;
            }
            return $names;
        }
    
    }
    ?>
