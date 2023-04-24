<?php

require_once __DIR__ . "/rest/dao/TeamsDao.class.php";
require_once __DIR__ . "/rest/services/TeamService.php";

$dao = new TeamsDao();

$type = $_REQUEST["type"];

switch($type){

    case 'add':
        $tname = $_REQUEST["team_name"];
        $tcity = $_REQUEST["team_city"];
        $dao->add("$tname","$tcity");
        break;
    case 'update':
        $id = $_REQUEST["id"];
        $tname = $_REQUEST["team_name"];
        $tcity = $_REQUEST["team_city"];
        $dao->update($id,"$tname","$tcity");
        break;
    case 'delete':
        $id = $_REQUEST["id"];
        $dao->delete($id);
        break;
    case 'get':
        $service = new TeamService();
        $result = $service->get_all();
    default:
        $result = $dao->get_all();
        print_r($result);
}





?>