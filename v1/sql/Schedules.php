<?php

class Schedules
{
    const Get = "
        SELECT
            manage.f_movie_manage_id                        AS id,              -- 映画管理ID
            manage.f_movie_id                               AS movie_id,        -- 映画ID
            manage.f_movie_manage_day                       AS day,             -- 上映日
            manage.f_movie_manage_start_time                AS start,           -- 上映開始時間
            DATE_ADD(
                manage.f_movie_manage_start_time,
                INTERVAL CEIL(movie.f_movie_time/10)*10 + :time1 MINUTE
            )                                               AS end,             -- 上映終了時間
            CEIL(movie.f_movie_time/10)*10 + :time2         AS screening_time,  -- 上映時間
            manage.f_theater_id                             AS theater_id,      -- シアターID
            CASE theater.f_theater_type
                WHEN :theater_large     THEN :seats_large
                WHEN :theater_medium    THEN :seats_medium
                ELSE :seats_small
            END                                             AS all_seats        -- 全座席数
        FROM
            t_movie_manages     AS manage
        JOIN
            t_movies            AS movie
        ON
            manage.f_movie_id = movie.f_movie_id
        JOIN
            t_theaters          AS theater
        ON
            manage.f_theater_id = theater.f_theater_id";

    // const extract   = "     WHERE   manage.f_movie_manage_day BETWEEN NOW() AND DATE_ADD( NOW(), INTERVAL 7 DAY)";
    const Sort      = "     ORDER BY    id, day, start ASC";

    const GetAll    = Schedules::Get . Schedules::Sort;
    const GetById   = Schedules::Get . "     WHERE  manage.f_movie_id = :id" . Schedules::Sort;
}
