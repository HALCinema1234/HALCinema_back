<?php

class Movies
{
    const GetAll = "
        SELECT
            movie.f_movie_id            AS id,                  -- 映画ID
            movie.f_movie_name          AS title,               -- タイトル
            image.f_movie_image_url     AS thumbnail,           -- サムネイル
            movie.f_movie_start_day     AS start,               -- 公開開始日
            movie.f_movie_end_day       AS end,                 -- 公開終了日
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
        -- AND
        --    f_movie_end_day > NOW()                           -- TODO: 検索日での抽出を保留にする
        ORDER BY
            start";

    const GetById = "
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
}
