<?php

class Seats
{
    const Get = "
        SELECT
            seat.f_reserve_id                   AS reserve_id,
            manage.f_movie_manage_day           AS day,
            manage.f_movie_manage_start_time    AS start,
            manage.f_theater_id                 AS theater,
            movie.f_movie_name                  AS movie,
            seat.f_reserve_seat_name            AS seat,
            member.f_member_name                AS name
        FROM
            t_reserve_seats         AS seat
        JOIN
            t_reserves              AS reserve
        ON
            seat.f_reserve_id = reserve.f_reserve_id
        JOIN
            t_movie_manages         AS manage
        ON
            reserve.f_movie_manage_id = manage.f_movie_manage_id
        JOIN
            t_movies                AS movie
        ON
            manage.f_movie_id = movie.f_movie_id
        LEFT JOIN
            t_members               AS member
        ON
            reserve.f_member_id = member.f_member_id";

    const Sort          = "        ORDER BY  day, start, theater;";

    const GetAll        = Seats::Get . Seats::Sort;
    const GetByMemberId = Seats::Get . "    WHERE reserve.f_member_id = :id" . Seats::Sort;

    const GetByManageId = "
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

    const GetByReserveId = "
        SELECT
            f_reserve_seat_name     AS name,
            f_ticket_id             AS ticket
        FROM
            t_reserve_seats
        WHERE
            f_reserve_id = :id";

    const GetCountByManageId = "
        SELECT
            count(*)            AS count
        FROM
            t_reserve_seats     AS seat
        JOIN
            t_reserves          AS reserve
        ON
            seat.f_reserve_id = reserve.f_reserve_id
        WHERE
            reserve.f_movie_manage_id = :id";

    const GetCountByReserveId = "
            SELECT
                count(*)            AS count
            FROM
                t_reserve_seats     AS seat
            WHERE
                seat.f_reserve_id = :id";

    const Add = "
        INSERT INTO
            t_reserve_seats
            (
                f_reserve_id,
                f_reserve_seat_name,
                f_ticket_id
            )
        VALUES
            (
                :id,
                :name,
                :ticket
            );
    ";

    const Edit = "
    ";

    const Del = "
        DELETE
        FROM
            t_reserve_seats
        WHERE
            f_reserve_id = :id
        AND
            f_reserve_seat_name = :seat
    ";
}
