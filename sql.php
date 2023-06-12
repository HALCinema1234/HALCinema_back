<?php

class Sql{
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

    const SelectImages = "
        SELECT
            f_movie_id          AS id,
            f_movie_image_url   AS image_url
        FROM
            t_movie_images";
    
    const SelectTickets = "
            SELECT
                f_ticket_id     AS id,
                f_ticket_name   AS name,
                f_ticket_price  As price
            FROM
                t_tickets";
}

?>