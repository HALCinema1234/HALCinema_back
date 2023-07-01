<?php

class Sql
{
    // =====================================================================
    // 映画情報
    // =====================================================================
    // 公開が終了していない映画情報を取得
    const SelectMoviesAll = "
        SELECT
            movie.f_movie_id            AS id,
            movie.f_movie_name          AS title,
            image.f_movie_image_url     AS thumbnail,
            CASE
                WHEN f_movie_start_day < now() THEN true
                ELSE    false
            END                     AS on_air,
            f_movie_age_restrictions    AS age_restrictions
        FROM
            t_movies        AS movie
        JOIN
            t_movie_images  AS image
        ON
            movie.f_movie_id = image.f_movie_id
        WHERE
            image.f_movie_image_thumbnail = 1
        AND
            f_movie_end_day > NOW()
        ORDER BY id";

    const SelectMoviesById = "
        SELECT
            movie.f_movie_name              AS title,
            movie.f_movie_start_day         AS start,
            movie.f_movie_age_restrictions  AS age_restrictions,
            movie.f_movie_data              AS data,
            movie.f_movie_introduction      AS introduction,
            movie.f_movie_time              AS time
        FROM
            t_movies        AS movie
        WHERE
            movie.f_movie_id = :id";

    // =====================================================================
    // 上映スケジュール
    // =====================================================================
    // 本日から1週間分のスケジュールを取得
    const SelectSchedulesById = "
    SELECT
        manage.f_movie_manage_id                        AS id,
        manage.f_movie_manage_day                       AS day,
        manage.f_movie_manage_start_time                AS start,
        DATE_ADD(
            manage.f_movie_manage_start_time,
            INTERVAL CEIL(movie.f_movie_time/10)*10 + :time1 MINUTE
        )                                               AS end,
        CEIL(movie.f_movie_time/10)*10 + :time2         AS screening_time,
        manage.f_theater_id                             AS theater_id,
        CASE theater.f_theater_type
            WHEN 1 THEN 200
            WHEN 2 THEN 120
            ELSE 70
        END                                             AS all_seats,
        CASE isnull(reserve_info.cnt)
            WHEN 1 THEN 0
            ELSE reserve_info.cnt
        END                                             AS reserved_seats
    FROM
        t_movie_manages     AS manage
    JOIN
        t_movies            AS movie
    ON
        manage.f_movie_id = movie.f_movie_id
    JOIN
        t_theaters          AS theater
    ON
        manage.f_theater_id = theater.f_theater_id
    LEFT JOIN
        (SELECT
            reserve.f_movie_manage_id           AS manage_id,
            count(seat.f_reserve_seat_name)     AS cnt
        FROM
            t_reserve_seats AS seat
        JOIN
            t_reserves      AS reserve
        ON
            seat.f_reserve_id = reserve.f_reserve_id)	AS reserve_info
    ON
        reserve_info.manage_id = manage.f_movie_manage_id
    WHERE
        manage.f_movie_manage_day BETWEEN NOW() AND DATE_ADD( NOW(), INTERVAL 7 DAY)
    AND
        manage.f_movie_id = :id";

    // =====================================================================
    // 上映種別
    // =====================================================================
    // 映画の上映種別
    const SelectMovieTypes = "
        SELECT
            handling.f_movie_id         AS id,
            type.f_movie_type_name      AS name
        FROM
            t_handling_movies_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";

    const SelectMovieTypesAll    = Sql::SelectMovieTypes . "    ORDER BY id";
    const SelectMovieTypesById   = Sql::SelectMovieTypes . "   WHERE handling.f_movie_id = :id";

    // 上映映画の上映種別
    const SelectManageTypesById = "
        SELECT
            handling.f_movie_manage_id  AS id,
            type.f_movie_type_name      AS name
        FROM
            t_handling_manages_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id
        WHERE
            handling.f_movie_manage_id = :id";

    // =====================================================================
    // 映画画像
    // =====================================================================
    const SelectImagesById = "
        SELECT
            f_movie_image_url   AS image_url
        FROM
            t_movie_images
        WHERE
            f_movie_image_thumbnail = 0
        AND
            f_movie_id = :id";

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
    // 券種
    // =====================================================================
    const SelectSeatsById = "
        SELECT
            LEFT(seat.f_reserve_seat_name,1)    AS row,
            RIGHT(seat.f_reserve_seat_name,1)   AS col
        FROM
            t_reserve_seats     AS seat
        JOIN
            t_reserves          AS reserve
        ON
            seat.f_reserve_id = reserve.f_reserve_id
        WHERE
            reserve.f_movie_manage_id = :id
        ORDER BY
            row ASC, col ASC";

    // =====================================================================
    // 予約
    // =====================================================================
    const InsertReserves = "
        INSERT INTO
            t_reserves
            (
                f_movie_manage_id,
                f_reserve_date,
                f_member_id
            )
        VALUES
            (
                :manage_id,
                NOW(),
                :member_id
            );
    ";
}
