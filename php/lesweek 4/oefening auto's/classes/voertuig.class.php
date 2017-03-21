<?php
class voertuig {
	private $m_sMerk;
	private $m_iAantalPassagiers;
	private $m_iAantalDeuren;

	public function __set($p_sProperty, $p_vValue){
			switch ($p_sProperty){
				case "Merk":
					$this->m_sMerk = $p_vValue;
					break;
				case "AantalPassagiers":
					$this->m_iAantalPassagiers = $p_vValue;
					break;
				case "AantalDeuren":
					$this->m_iAantalDeuren = $p_vValue;
					break;
			}
	}
	public function __get($p_sProperty){
			switch($p_sProperty){
				case "Merk":
					return $this->m_sMerk;
					break;
				case "AantalPassagiers":
					return $this->m_iAantalPassagiers;
					break;
				case "AantalDeuren":
					return $this->m_iAantalDeuren;
					break;
			}	
		}
	    public function Save()
    {
        // conn (PDO)
        $conn = new PDO('mysql:host=localhost; dbname=voertuigen', 'root', '');

        // statement: INSERT query
        $statement = $conn->prepare("insert into voertuig (merk, Aantal_Passagiers, Aantal_Deuren) values (:merk, :aantalPassagiers, :aantalDeuren)");
        $statement->bindValue(":merk", $this->m_sMerk);
        $statement->bindValue(":aantalPassagiers", $this->m_iAantalPassagiers);
        $statement->bindValue(":aantalDeuren", $this->m_iAantalDeuren);

        // execute statement
        $res = $statement->execute();
        // confirmation
        return $res;

    }

    public function Reserveer()
    {
        return "<li><b>Merk: </b>" . $this->m_sMerk . "</li><li><b>Aantal passagiers: </b>" . $this->m_iAantalPassagiers . "</li><li><b>Aantal deuren: </b>" . $this->m_iAantalDeuren . "</li>";
    }
	}
?>