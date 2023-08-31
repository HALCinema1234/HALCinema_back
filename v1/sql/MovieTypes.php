<?php

class MovieTypes
{
    const Get = "
        SELECT
            handling.f_movie_id         AS id,      -- 映画ID
            type.f_movie_type_name      AS name     -- 上映種別名
        FROM
            t_handling_movies_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";

    const GetAll    = MovieTypes::Get . "      ORDER BY id";
    const GetById   = MovieTypes::Get . "      WHERE handling.f_movie_id = :id";
}
