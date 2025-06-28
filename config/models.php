<?php

return [
    'PhoneContact' => 'App\\Models\\PhoneContact',
    'MailContact' => 'App\\Models\\MailContact',
    'Address' => 'App\\Models\\AddressContact',
    'Customer' => 'App\\Models\\Customer',
    'Member' => 'App\\Models\\Member',
    'Court' => 'App\\Models\\court',
    'Schedule' => 'App\\Models\\court',
    'User' => 'App\\Models\\User',
    'Subject' => 'App\\Models\\Subject',
    'Rankings' => 'App\\Models\\Rankings',
    'ClassReservation' => 'App\\Models\\ClassReservation',
    'CourtsReservation' => 'App\\Models\\CourtReservation',
    'Mainmodels' => [
        "contacts" => 'App\\Models\\Contact',
        "customers" => 'App\\Models\\Customer',
        "Address" => 'App\\Models\\AddressContact',
        "PhoneContact" => 'App\\Models\\PhoneContact',
        "MailContact" => 'App\\Models\\MailContact',
        'member' => 'App\\Models\\Member',
        'court' => 'App\\Models\\court',
        'schedule' => 'App\\Models\\schedule',
        'users' => 'App\\Models\\User',
        'subject' => 'App\\Models\\Subject',
        'rankings' => 'App\\Models\\Rankings',
        'classreservation' => 'App\\Models\\ClassReservation',
        'courtsreservation' => 'App\\Models\\CourtReservation',
    ],
    'EndpointName' => [
        "contacts" => "contact_id",
        "customers" => "customer_id",
        "member" => "member_id",
        "court" => "court_id",
        "schedule" => "schedule_id",
        "users" => "id_user",
        "subject" => "id_subject",
        'rankings' => 'id_ranking',
        'classreservation' => 'id_reservation',
        'courtsreservation' => 'id_court_reservation',
    ],
    'Mainfields' => [
        "contacts" => [
            "fullname"
        ],
        "customers" => [
            "company_name",
            "email",
            "phone",
            "country",
            "notes"
        ],
        "users" => [
            "password",
            "fname",
            "lname",
            "company",
            "email",
            "country",
            "phone",
            "gender",
            "birthday",
            "id_status",
        ],
        "member" => [
            "fullname"
            ,"number_member"
            ,"datebirthday"
            ,"email"
            ,"username"
            ,"cellphone"
            ,"address"
            ,"colony"
        ],
        "court" => [
            "descripcion"
        ],
        "schedule" => [
            "descripcion",
            "hour_initial",
            "hour_finish",
            "minuts",
            "time_hour_initial",
            "time_hour_finish",
            "id_type_class",
            "id_type_schedule",
        ],
        "subject" => [
            "descripcion"
        ],
        "rankings" => [
            "player_name"
        ],
        "classreservation" => [
            "id_reservation",
            "id_classtype",
            "class_type",
            "id_schedulemat",
            "schedule_mat",
            "id_schedulevesp",
            "schedule_vesp",
            "id_user",
            "username"
        ],
        "courtsreservation" => [
            "id_court_reservation",
            "id_court",
            "court_name",
            "date_reservation",
            "hour_reservation",
            "id_user",
            "username"
        ]
    ],
    'RelationsModels' => [
        "contacts" => [
            "PhoneContact",
            "MailContact",
            "Address"
        ],
        "member" => [],
        "court" => [],
        "schedule" => [],
        "users" => [],
        "subject" => [],
        "rankings" => [],
        "classreservation" => [],
        "courtsreservation" => [],
    ],
    'Validations' => [
        "users" => [
            "password"
        ],
        "member" => [],
        "court" => [],
        "schedule" => [],
        "contacts" => [],
        "subject" => [],
        "rankings" => [],
        "classreservation" => [],
        "courtsreservation" => [],
    ]
];
