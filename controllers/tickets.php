<?php

class TicketsController extends Controller{

    public function get():array{
        $db = new DB();

        $sql = "
            SELECT
                f_ticket_id     AS id,
                f_ticket_name   AS name,
                f_ticket_price  As price
            FROM
                t_tickets";

        $res_tickets = parent::select($db, $sql);

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