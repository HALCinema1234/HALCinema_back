<?php

class Sql{
    // =====================================================================
    // 映画情報
    // =====================================================================
    const SelectMovies = "
        SELECT
            f_movie_id                  AS id,
            f_movie_name                AS name,
            f_movie_start_day           AS start,
            f_movie_end_day             AS end,
            f_movie_age_restrictions    AS age_restrictions,
            f_movie_data                AS data,
            f_movie_introduction        AS introduction,
            f_movie_time                AS time
        FROM
            t_movies";
    
    const SelectMoviesById  = Sql::SelectMovies . "   WHERE f_movie_id = :id";
    const SelectMoviesAll   = Sql::SelectMovies . "    ORDER BY id";

    // =====================================================================
    // 上映種別
    // =====================================================================
    const SelectTypes = "
        SELECT
            handling.f_movie_id         AS id,
            type.f_movie_type_name      AS name
        FROM
            t_handling_movie_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";
    
    const SelectTypesById   = Sql::SelectTypes . "   WHERE handling.f_movie_id = :id";
    const SelectTypesAll    = Sql::SelectTypes . "    ORDER BY id";

    // =====================================================================
    // 映画画像
    // =====================================================================
    const SelectImages = "
        SELECT
            f_movie_id          AS id,
            f_movie_image_url   AS image_url
        FROM
            t_movie_images";
    
    const SelectImagesById = Sql::SelectImages . "   WHERE f_movie_id = :id";
    const SelectImagesAll  = Sql::SelectImages . "    ORDER BY id";

    // =====================================================================
    // 券種
    // =====================================================================
    const SelectTickets = "
            SELECT
                f_ticket_id     AS id,
                f_ticket_name   AS name,
                f_ticket_price  As price
            FROM
                t_tickets";

    // =====================================================================
    // 上映スケジュール
    // =====================================================================
    const SelectSchedules = "
            SELECT
                manage.f_movie_manage_id            AS id,
                manage.f_movie_manage_day           AS day,
                manage.f_movie_manage_start_time    AS start,
                DATE_ADD(
                    manage.f_movie_manage_start_time,
                    INTERVAL CEIL(movie.f_movie_time/10)*10 + :time MINUTE
                )                                   AS end,
                CEIL(movie.f_movie_time/10)*10      AS screening_time,
                manage.f_theater_id                 AS theater_id,
                theater.f_theater_type              AS theater_type,
                CASE theater.f_theater_type
                    WHEN 1 THEN '大'
                    WHEN 2 THEN '中'
                    ELSE '小'
                END                                 AS theater_type_name,
                manage.f_movie_id                   AS movie_id,
                movie.f_movie_name                  AS movie_name,
                type.f_movie_type_name              AS movie_type,
                movie.f_movie_age_restrictions      AS movie_age_restrictions,
                movie.f_movie_time                  AS movie_time
            FROM
                t_movie_manages     AS manage
            JOIN
                t_movies            AS movie
            ON
                manage.f_movie_id = movie.f_movie_id
            JOIN
                t_movie_types       AS type
            ON
                manage.f_movie_type_id = type.f_movie_type_id
            JOIN
                t_theaters          AS theater
            ON
                manage.f_theater_id = theater.f_theater_id";

    const SelectSchedulesById  = Sql::SelectSchedules . "   WHERE manage.f_movie_id = :id";
}

?>