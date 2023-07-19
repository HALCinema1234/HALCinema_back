<?php

class Sql
{
    // =====================================================================
    // 映画情報
    // =====================================================================
    // 公開が終了していない映画すべてを検索する
    const GetMoviesAll = "
        SELECT
            movie.f_movie_id            AS id,                  -- 映画ID
            movie.f_movie_name          AS title,               -- タイトル
            image.f_movie_image_url     AS thumbnail,           -- サムネイル
            movie.f_movie_start_day     AS start,               -- 公開開始日
            CASE
                WHEN f_movie_start_day < now() THEN true
                ELSE    false
            END                         AS on_air,              -- 公開中(true)/公開予定(false)
            f_movie_age_restrictions    AS age_restrictions,    -- 年齢制限
            movie.f_movie_data          AS data,                -- 制作情報
            movie.f_movie_introduction  AS introduction,        -- イントロダクション
            movie.f_movie_time          AS time                 -- 映画の長さ
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
        ORDER BY start";

    // 映画IDを指定して検索する
    const GetMoviesById = "
        SELECT
            movie.f_movie_name              AS title,               -- タイトル
            movie.f_movie_start_day         AS start,               -- 公開開始日
            movie.f_movie_age_restrictions  AS age_restrictions,    -- 年齢制限
            movie.f_movie_data              AS data,                -- 制作情報
            movie.f_movie_introduction      AS introduction,        -- イントロダクション
            movie.f_movie_time              AS time                 -- 映画の長さ
        FROM
            t_movies        AS movie
        WHERE
            movie.f_movie_id = :id";

    // =====================================================================
    // 上映スケジュール
    // =====================================================================
    const GetSchedules = "
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
            END                                             AS all_seats,       -- 全座席数
            CASE isnull(reserve_info.cnt)
                WHEN 1 THEN 0
                ELSE reserve_info.cnt
            END                                             AS reserved_seats   -- 予約座席数
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
            manage.f_movie_manage_day BETWEEN NOW() AND DATE_ADD( NOW(), INTERVAL 7 DAY)";

    const GetSchedulesAll   = Sql::GetSchedules . "     ORDER BY id, day, start ASC";
    const GetSchedulesById  = Sql::GetSchedules . "     AND manage.f_movie_id = :id     ORDER BY id, day, start ASC";

    // =====================================================================
    // 上映種別
    // =====================================================================
    // ---------------------------------------------------------------------
    // 映画の上映種別
    // ---------------------------------------------------------------------
    const GetMovieTypes = "
        SELECT
            handling.f_movie_id         AS id,      -- 映画ID
            type.f_movie_type_name      AS name     -- 上映種別名
        FROM
            t_handling_movies_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";

    const GetMovieTypesAll    = Sql::GetMovieTypes . "      ORDER BY id";
    const GetMovieTypesById   = Sql::GetMovieTypes . "      WHERE handling.f_movie_id = :id";

    // ---------------------------------------------------------------------
    // 上映映画の上映種別
    // ---------------------------------------------------------------------
    const GetManageTypes = "
        SELECT
            handling.f_movie_manage_id  AS id,      -- 上映管理ID
            type.f_movie_type_name      AS name     -- 上映種別名
        FROM
            t_handling_manages_types    AS handling
        JOIN
            t_movie_types               AS type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";

    const GetManageTypesAll     = Sql::GetManageTypes . "   ORDER BY id";
    const GetManageTypesById    = Sql::GetManageTypes . "
        JOIN 
            t_movie_manages     AS manage
        ON 
            handling.f_movie_manage_id = manage.f_movie_manage_id
        WHERE
            manage.f_movie_id = :id";

    // =====================================================================
    // 映画画像(スクリーンショット)
    // =====================================================================
    const GetImagesAll = "
        SELECT
            f_movie_id          AS id,          -- 映画ID
            f_movie_image_url   AS image_url    -- 画像URL
        FROM
            t_movie_images
        WHERE
            f_movie_image_thumbnail = 0";

    const GetImagesById = "
        SELECT
            f_movie_image_url   AS image_url    -- 画像URL
        FROM
            t_movie_images
        WHERE
            f_movie_image_thumbnail = 0
        AND
            f_movie_id = :id";

    // =====================================================================
    // 券種
    // =====================================================================
    const GetTickets = "
            SELECT
                f_ticket_id     AS id,      -- 券種ID
                f_ticket_name   AS name,    -- 券種名
                f_ticket_price  As price    -- 値段
            FROM
                t_tickets";

    // =====================================================================
    // 座席
    // =====================================================================
    const GetTheaterById = "
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

    const GetSeatsById = "
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
    const GetMaxReservesId = "
        SELECT
            f_reserve_id            AS id   -- 予約ID
        FROM
            t_reserves
        WHERE
            f_member_id = :id
        ORDER BY
            f_reserve_date DESC
        LIMIT 1
    ";

    const GetReservesById = "
        SELECT
            reserve.f_reserve_id            AS id,          -- 予約ID
            reserve.f_movie_manage_id       AS manage_id,   -- 上映管理ID
            reserve.f_reserve_date          AS date,        -- 予約日時
            reserve.f_member_id             AS member_id,   -- 会員ID
            reserve.f_reserve_delegate_name AS name,        -- 会員名
            reserve.f_reserve_delegate_tel  AS tel,         -- 会員電話番号
            reserve.f_reserve_delegate_mail AS mail         -- 会員メールアドレス
        FROM
            t_reserves          AS reserve
        JOIN
            t_movie_manages     AS manage
        WHERE
            f_member_id = :id
        ORDER BY
            date DESC
        LIMIT 1";

    const GetReserveSeatsById = "
        SELECT
            f_reserve_seat_name     AS name,
            f_ticket_id             AS ticket
        FROM
            t_reserve_seats
        WHERE
            f_reserve_id = :id
    ";

    const AddReserves = "
        INSERT INTO
            t_reserves
            (
                f_movie_manage_id,
                f_reserve_date,
                f_member_id,
                f_reserve_delegate_name,
                f_reserve_delegate_tel,
                f_reserve_delegate_mail
            )
        VALUES
            (
                :manage_id,
                NOW(),
                :member_id,
                NULL,
                NULL,
                NULL
            );
    ";

    const AddReserveSeats = "
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

    // =====================================================================
    // 会員
    // =====================================================================
    const GetUserById = "
        SELECT
            member.f_member_name            AS name,
            member.f_member_name_kana       AS kana,
            member.f_member_birthday        AS birthday,
            member.f_member_gender          AS gender,
            member.f_member_phone_number    AS phone_number,
            member.f_member_mail_address    AS mail_address,
            job.f_job_name                  AS job
        FROM
            t_members   AS member
        JOIN
            t_jobs      AS job
        ON
            member.f_job_id = job.f_job_id
        WHERE
            member.f_member_id = :id";

    const AddUsers = "";

    // =====================================================================
    // ログイン
    // =====================================================================
    const CheckLogin = "
        SELECT
            f_member_id     AS id,
            f_member_name   As name
        FROM
            t_members
        WHERE
            f_member_mail_address = :email
        AND
            f_member_password = :password
    ";
}

?>