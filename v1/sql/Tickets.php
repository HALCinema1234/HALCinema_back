<?php

class Tickets
{
    const GetAll = "
        SELECT
            f_ticket_id     AS id,      -- 券種ID
            f_ticket_name   AS name,    -- 券種名
            f_ticket_price  As price    -- 値段
        FROM
            t_tickets";
}
