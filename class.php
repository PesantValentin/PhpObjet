<?php

//EXO 1
class User
{
    private $_Nom; //nom du mec
    private $_Prenom; //prénom du mec

    public function afficheUser()
    {
        echo "Je suis un User";
    }
}

// EXO 2
class Personnage
{
    private $_Pseudo;
    private $_Vie;

    public function __construct($newVie)
    {   
        $this->_Vie=$newVie;
    }

    public function Stats()

    {
        echo "je m'appelle $this->_Pseudo et j'ai $this->_Vie de vie";
    }
}


//EXO 3
class Personnage2
{
    private $_Pseudo;
    private $_Vie=100;

    public function __construct($newVie,$Pseudo)
    {   
        $this->_Pseudo;
        $this->_Vie=$newVie;
    }

    public function Stats()

    {
        echo "je m'appelle $this->_Pseudo et j'ai $this->_Vie de vie";
    }
}

//EXO 4
class Personnage3
{
    private $_Pseudo;
    private $_Vie;
    private $_Attaque;

    public function __construct( $Vie,$Pseudo)
    {
        $this->_Pseudo=$Pseudo;
        $this->_Vie=$Vie;
    }

    public function Attaquer($PersoAttaque,$Attaque){
         
        echo "<p>".$this->getPseudo(). " attaque " .$Attaque." de point de force sur ".$PersoAttaque->_Pseudo."</p>";
        
        $PersoAttaque->SePrendreDegat($Attaque);

        echo "<p>".$PersoAttaque->_Pseudo." a maintenant ".$PersoAttaque->getLaVie()."</p>" ;
    }

    public function SePrendreDegat($Attaque){

        $this->_Vie = $this->_Vie - $Attaque;
    }

    public function getPseudo(){
        return $this->_Pseudo;
    }
    public function getLaVie(){
        return $this->_Vie;
    }
}


//EXO 5
class Personnage4
{


    
}


?>




