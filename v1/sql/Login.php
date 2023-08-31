<?php

class Login
{
    const Check = "
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
