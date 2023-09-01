<?php

class Reserves
{
    const GetAll = "
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
        ORDER BY
            id";

    const GetById = "
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
            date DESC";

    const GetMaxId = "
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

    const Add = "
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

    const Del = "
        DELETE
        FROM
            t_reserves
        WHERE
            f_reserve_id = :id
    ";
}
