<?php

require_once __DIR__ . "/BaseService.php";
require_once __DIR__ . "/../dao/TeamsDao.class.php";

class TeamService extends BaseService{

    public function __construct(){
        parent::__construct(new TeamsDao);
    }

    
}
?>