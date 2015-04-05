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

    public function countUsers()
    {
$stmt = $this->db->prepare('SELECT user_account_type, COUNT(*) AS "user_count" FROM users USE INDEX (user_id) WHERE user_active = 1 GROUP BY user_account_type');
$stmt->execute();
$info = $stmt->fetchAll();

$query = $this->db->prepare('SELECT COUNT(*) AS "user_count" FROM tutors USE INDEX (id) WHERE tutor_active=1');
$query->execute();
$query_result = $query->fetch();

$member_count = new stdClass();

$member_count->std = $info[0]->user_count;
$member_count->tutor = $info[1]->user_count;
$member_count->tutor_active = $query_result->user_count;

return $member_count;
	}


}


