<?php

class CyberaanvalModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllCyberaanval()
    {
        $sql = 'SELECT CYBER.Naam
                      ,CYBER.Jaar 
                      ,CYBER.AantalSlachtoffers
                      ,CYBER.TypeAanval
                      ,CYBER.Schade       
        
                FROM Cyberaanval as CYBER
                
                ORDER BY CYBER.AantalSlachtoffers DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}