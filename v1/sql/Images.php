<?php

class Images
{
    const GetAll = "
        SELECT
            f_movie_id          AS id,          -- 映画ID
            f_movie_image_url   AS image_url    -- 画像URL
        FROM
            t_movie_images
        WHERE
            f_movie_image_thumbnail = 0";

    const GetById = "
        SELECT
            f_movie_image_url   AS image_url    -- 画像URL
        FROM
            t_movie_images
        WHERE
            f_movie_image_thumbnail = 0
        AND
            f_movie_id = :id";
}
