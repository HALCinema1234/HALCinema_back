<?php

class TicketsController extends Controller{

    public function get():array{
        $res_tickets = parent::select(Sql::SelectTickets);

        if($res_tickets){
            return $res_tickets;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

}

?>