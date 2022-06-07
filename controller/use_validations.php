<?php

class Validations extends Data{
/*
*@Data and Errors Array;
*/
protected Array $data = [];
protected Array $errors = [];

/*
*@fields validation
*/
use Username, 
    Email,
    contact,
    occupation,
    location,
    membertype, 
    gymsession, 
    payment_m,
    short_message,
    messagefield,
    timeAM,
    endtimeAM,
    timePM,
    endtimePM, 
    Password; 
}


?>