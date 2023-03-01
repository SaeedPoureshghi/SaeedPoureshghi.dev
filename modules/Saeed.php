<?php
 
class Saeed{

        public $birthdate = '1982/03/14';
        private $nationality = 'Iranian';

      public function Age() {
            $now = date_create();

            $birthday = date_create($this->birthdate);

            $diff = date_diff($now,$birthday);

            return $diff->format("%y YearsOld!");
      }

      public function getNationality() {
          return $this->nationality;
      }

    }
    


?>