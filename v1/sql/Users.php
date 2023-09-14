<?php

class Users
{
    const GetAll = "
    SELECT
        member.f_member_id              AS id,              -- メンバーID
        member.f_member_name            AS name,            -- 名前
        member.f_member_name_kana       AS kana,            -- 名前(かな)
        member.f_member_birthday        AS birthday,        -- 誕生日
        CASE member.f_member_gender
            WHEN 1 THEN '男性'
            WHEN 2 THEN '女性'
            ELSE 'そのほか'
        END                             AS gender,          -- 性別
        member.f_member_phone_number    AS phone_number,    -- 電話番号
        member.f_member_mail_address    AS mail_address,    -- メールアドレス
        job.f_job_name                  AS job              -- 職業
    FROM
        t_members   AS member
    JOIN
        t_jobs      AS job
    ON
        member.f_job_id = job.f_job_id";

    const GetById = "
        SELECT
            member.f_member_name            AS name,            -- 名前
            member.f_member_name_kana       AS kana,            -- 名前(かな)
            member.f_member_birthday        AS birthday,        -- 誕生日
            member.f_member_gender          AS gender,          -- 性別
            member.f_member_phone_number    AS phone_number,    -- 電話番号
            member.f_member_mail_address    AS mail_address,    -- メールアドレス
            job.f_job_name                  AS job              -- 職業
        FROM
            t_members   AS member
        JOIN
            t_jobs      AS job
        ON
            member.f_job_id = job.f_job_id
        WHERE
            member.f_member_id = :id";

    const GetMaxMemberId = "
        SELECT
            MAX(f_member_id)    AS member_id
        FROM
        t_members
    ";

    const Add = "
        INSERT INTO
            t_members
            (
                f_member_name,
                f_member_name_kana,
                f_member_password,
                f_member_birthday,
                f_member_gender,
                f_member_phone_number,
                f_member_mail_address,
                f_job_id
            )
        VALUES
            (
                :name,
                :name_kana,
                :password,
                :birthday,
                :gender,
                :phone_number,
                :mail_address,
                :job_id
            );
    ";

    const Edit = "
        UPDATE
            t_members
        SET
            f_member_name           = :name,
            f_member_name_kana      = :name_kana,
            f_member_password       = :password,
            f_member_birthday       = :birthday,
            f_member_gender         = :gender,
            f_member_phone_number   = :phone_number,
            f_member_mail_address   = :mail_address,
            f_job_id                = :job_id
        WHERE
            f_member_id = :member_id";
}
