<?php
      class user
      {
        /*
         *
         */
          private $_dbCo = null;

          /*
           *
           */
          private $_allusers = null;


          private $_nom = null;
          private $_prenom = null;
          private $_Birthdate = null;
          private $_Age = null;


          function __construct($nom, $prenom, $birthdate, $age){
              $dbConnect = new dbConnect();
              $this->_dbCo = $dbConnect->GetPdo();

              $this->_Age = $age;
              $this->_nom = $nom;
              $this->_Birthdate = $birthdate;
              $this->_prenom = $prenom;

              $this->_allusers = $dbConnect->GetMyUsers();
          }

          function submitUser()
          {
            $this->_dbCo->prepare("INSERT INTO user ('nom','prenom','Birthdate','Age') VALUES (':nom',':prenom',':birthdate',':age')");

              $result = $this->_dbCo->exec(array(
                  'nom' => $this->_nom;
                  'prenom' => $this->_prenom;
                  'birthdate' => $this->__birthdate;
                  'age'=> $this->_Age;
              ));
          }

          function GetAllUsers(){
              return $this->_allusers;
          }

          function GetAge(){
              return $this->_Age;
          }

          function GetNom(){
              return $this->_nom;
          }

          function GetBirthdate(){
              return $this->_Birthdate;
          }

          function GetPrenom(){
              return $this->_prenom;
          }


      }


        $test= new user($_POST["nom"], $_POST["prenom"], $_POST["birthdate"], $_POST["age"]);
        $users = $test->GetAllUsers();