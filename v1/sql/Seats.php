<?php

class Seats
{
    const GetAll = "
        SELECT
            *
        FROM
            t_reserve_seats     AS seat
        JOIN
            t_reserves          AS reserve
        ON
            seat.f_reserve_id = reserve.f_reserve_id";

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
}
