<?php 

trait Queries {

protected $updates = "SELECT * FROM tbl_updates";

protected $users = "SELECT * FROM tbl_users";

protected $viewallmembers = "SELECT * FROM tbl_users WHERE user = 2"; 

protected $userscount = "SELECT id,user FROM tbl_users WHERE user = 2";

protected $pricing = "SELECT * FROM tbl_pricing"; 

protected $update = "UPDATE `tbl_users` SET `password` = :p WHERE `email` = :e ";

protected $updateuser = "UPDATE `tbl_updates` 
SET
`inform_user` = :i, 
`message` = :m,
`start_timeam` = :stam,
`end_timeam` = :etam,
`start_timepm` = :stpm,
`end_timepm` = :etpm
WHERE id = 1"; 

protected $register = "INSERT INTO tbl_users (name, email, contact, occupation, location, usertype, password,user) VALUES(?,?,?,?,?,?,?,?)";

protected $logintimetrack = "INSERT INTO tbl_logintimetrack (user_id) SELECT id FROM tbl_users
                             WHERE email = ?";

protected $payment = "INSERT INTO tbl_payments (email, session, payment_method) VALUES(?,?,?)";

protected $paymentscount = "SELECT id FROM tbl_payments";

protected $transaction_history = "SELECT tbl_pricing.session, tbl_pricing.price,
tbl_payments.payment_method, tbl_payments.payment_date
FROM tbl_payments 
INNER JOIN tbl_pricing
ON tbl_pricing.session = tbl_payments.session 
INNER JOIN tbl_users
ON tbl_payments.email = tbl_users.email
WHERE tbl_users.email = tbl_payments.email";

protected $trackpaymentsrecords = "SELECT tbl_payments.id, tbl_users.name, tbl_payments.payment_method, tbl_payments.payment_date, tbl_pricing.session, tbl_pricing.price FROM tbl_payments
INNER JOIN tbl_users
ON tbl_users.email = tbl_payments.email
INNER JOIN tbl_pricing
ON tbl_pricing.session = tbl_payments.session
WHERE tbl_users.email = tbl_payments.email";

protected $admintrackmembers = "SELECT tbl_users.*, tbl_logintimetrack.login_time 
FROM tbl_logintimetrack
INNER JOIN tbl_users
ON tbl_users.id = tbl_logintimetrack.user_id 
WHERE tbl_users.user = 2";

protected $delete_user = "DELETE FROM `tbl_users` WHERE `id` =:id";

}

?>