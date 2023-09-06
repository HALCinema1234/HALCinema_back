<?php

class Theaters
{
    const GetById = "
        SELECT
            theater.f_theater_id    AS id,
            theater.f_theater_type  AS type,
            CASE theater.f_theater_type
                WHEN :theater_large     THEN :seats_large
                WHEN :theater_medium    THEN :seats_medium
                ELSE :seats_small
            END                                             AS all_seats
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
