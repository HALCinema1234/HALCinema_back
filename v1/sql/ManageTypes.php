<?php

class ManageTypes
{
    const Get = "
        SELECT
            handling.f_movie_manage_id  AS id,      -- 上映管理ID
            type.f_movie_type_name      AS name     -- 上映種別名
        FROM
            t_handling_manages_types    AS handling
        JOIN
            t_movie_types               AS type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";

    const GetAll     = ManageTypes::Get . "   ORDER BY id";
    const GetById    = ManageTypes::Get . "
        JOIN 
            t_movie_manages     AS manage
        ON 
            handling.f_movie_manage_id = manage.f_movie_manage_id
        WHERE
            manage.f_movie_id = :id";
}
