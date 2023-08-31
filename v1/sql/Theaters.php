<?php

class Theaters
{
    const GetById = "
        SELECT
            theater.f_theater_type  AS type
        FROM
            t_movie_manages         AS manage
        JOIN
            t_theaters              AS theater
        ON
            manage.f_theater_id = theater.f_theater_id
        WHERE
            manage.f_movie_manage_id = :id
    ";
}
