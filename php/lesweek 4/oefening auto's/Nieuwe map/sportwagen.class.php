<?php
	include_once('voertuig.class.php');
	class sportwagen extends voertuig {
    protected $m_vStereoInstallatie;


    public function __set($p_sProperty, $p_vValue)
    {
        parent::__set($p_sProperty, $p_vValue);
        switch ($p_sProperty) {
            case "stereoInstallatie":
                $this->m_vStereoInstallatie = $p_vValue;
                break;
        }
    }

    public function __get($p_sProperty)
    {
        parent::__get($p_sProperty);
        switch ($p_sProperty){
            case "stereoInstallatie":
                return $this->m_vStereoInstallatie;
                break;
        }
    }

    public function Save(){
        // conn (PDO)
        $conn = new PDO('mysql:host=localhost; dbname=voertuigen', 'root', '');

        // statement: INSERT query
        $statement = $conn->prepare("INSERT INTO voertuig (merk, Aantal_Passagiers, Aantal_Deuren, stereoInstallatie) VALUES (:merk, :aantalPassagiers, :aantalDeuren, :stereoInstallatie);");
        $statement->bindValue(":merk", $this->m_sMerk);
        $statement->bindValue(":aantalPassagiers", $this->m_iAantalPassagiers);
        $statement->bindValue(":aantalDeuren", $this->m_iAantalDeuren);
        $statement->bindValue(":stereoInstallatie", $this->m_vStereoInstallatie);

        // execute statement
        $res = $statement->execute();

        // confirmation
        return $res;
    }

    public function Reserveer()
    {
        return  "<li><b>Merk: </b>" . $this->m_sMerk . "</li><li><b>Aantal passagiers: </b>" . $this->m_iAantalPassagiers . "</li><li><b>Aantal deuren: </b>" . $this->m_iAantalDeuren . "</li><li><b>Stereo installatie: </b>" . $this->m_vStereoInstallatie . "</li>";

    }
	}
?>