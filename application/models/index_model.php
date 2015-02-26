<?php

/**
 */
class IndexModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }


    public function incrementStats()
    {
$stmt = $this->db->prepare("UPDATE stats SET visitors=visitors+1");
$stmt->execute();
    }


    public function getStats()
    {
$stmt = $this->db->prepare("SELECT * FROM stats LIMIT 1");
$stmt->execute();
$info = $stmt->fetch();
return $info;
}


}


