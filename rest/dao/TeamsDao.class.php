<?php
require_once __DIR__ . "/BaseDao.class.php";

class TeamsDao extends BaseDao{
    /*
    * Constructor for establishing the connection to the database
    */
    public function __construct(){
        parent::__construct("teams");
    }



    /*
    * Method for fetching all teams from the database
    */
   /*  public function get_all(){
        $stmt = $this->conn->prepare("SELECT * FROM teams");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } */

    /*
    * Method for fetching a specific team from the database
    */

    /* public function get_by_id($id){
        $stmt = $this->conn->prepare("SELECT * FROM teams WHERE team_id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } */


    /*
    * Method for adding a new team to the database
    */
    /* public function add_team($team){
        $stmt = $this->conn->prepare("INSERT INTO teams (first_name,last_name,age) VALUES (:first_name,:last_name,:age);");
        $stmt->execute($team);
        $team['id'] = $this->conn->lastInsertId();
        return $team;
    } */


    /*
    * Method for updating an existing team in the database
    */
    /* public function update_team($team,$id){
        $team['id'] = $id;
        $stmt = $this->conn->prepare("UPDATE teams SET first_name=:first_name, last_name = :last_name, age = :age WHERE team_id = :id");
        $stmt->execute($team);
        return $team;
    } */
    //$stmt->execute(['id'=>$id,'first_name'=>$first_name,'last_name'=>$last_name,'age'=>$age]);


    /*
    * Method for deleting an team from the database
    */
    /* public function delete_team($id){
        $stmt = $this->conn->prepare("DELETE FROM teams WHERE team_id = :id");
        $stmt->bindParam(":id",$id); //prevents an SQL injection
        $stmt->execute();
    } */
    






}




?>