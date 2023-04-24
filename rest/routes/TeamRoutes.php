<?php
    Flight::route("GET /teams",function(){
        Flight::json(Flight::teamService()->get_all());  
    });

    Flight::route("GET /teams/@id", function($id){
        Flight::json(Flight::teamService()->get_by_id($id));
    });

    Flight::route("GET /teamsById", function(){
        Flight::json(Flight::teamService()->get_by_id(Flight::request()->query['id']));
    });

    Flight::route("DELETE /teams/@id", function($id){
        Flight::teamService()->delete($id);
        Flight::json(['message'=>'team by id ' . $id . ' has been deleted.']);
    });

    Flight::route("POST /teams", function(){
        $data = Flight::request()->data->getData();
        $response = Flight::teamService()->add($data);
        Flight::json(['message'=>'team added sucessfully.','Data: ' => $response]);
        
    });

    Flight::route("PUT /teams/@id", function($id){
        $data = Flight::request()->data->getData();
        $response = Flight::teamService()->update($data,$id);
        Flight::json(['message'=>'Updated team with new data.','Data'=> $response]);
    });



?>