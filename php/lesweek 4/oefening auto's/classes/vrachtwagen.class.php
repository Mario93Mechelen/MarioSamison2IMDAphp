<?php
	    include_once ('voertuig.class.php');

class vrachtwagen extends voertuig
{
    protected $m_iMaxLast;


    public function __set($p_sProperty, $p_vValue)
    {
        parent::__set($p_sProperty, $p_vValue);
        switch ($p_sProperty){
            case "maxLast":
                if (!empty($p_vValue) && !is_numeric($p_vValue)) {
                    throw new Exception("Max last moet een getal zijn!");
                }
                $this->m_iMaxLast = $p_vValue;
                break;
        }
    }
    public function Save(){
        // conn (PDO)
        $conn = new PDO('mysql:host=localhost; dbname=voertuigen', 'root', '');

        // statement: INSERT query
        $statement = $conn->prepare("INSERT INTO voertuig (merk, Aantal_Passagiers, Aantal_Deuren, max_last) VALUES (:merk, :aantalPassagiers, :aantalDeuren, :maxLast);");
        $statement->bindValue(":merk", $this->m_sMerk);
        $statement->bindValue(":aantalPassagiers", $this->m_iAantalPassagiers);
        $statement->bindValue(":aantalDeuren", $this->m_iAantalDeuren);
        $statement->bindValue(":maxLast", $this->m_iMaxLast);

        // execute statement
        $res = $statement->execute();

        // confirmation
        return $res;
    }

    public function Reserveer()
    {
        return "<li><b>Merk: </b>" . $this->m_sMerk . "</li><li><b>Aantal passagiers: </b>" . $this->m_iAantalPassagiers . "</li><li><b>Aantal deuren: </b>" . $this->m_iAantalDeuren . "</li><li><b>Max last: </b>" . $this->m_iMaxLast . " ton</li>";
    }
}
?>