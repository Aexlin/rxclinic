CREATE TABLE administrator (
    admin_id    INTEGER      PRIMARY KEY AUTO_INCREMENT NOT NULL,
    admin_name  VARCHAR (20) NOT NULL,
    admin_email VARCHAR (30) NOT NULL,
    admin_pword VARCHAR (20) NOT NULL
);

INSERT INTO administrator (
                              admin_id,
                              admin_name,
                              admin_email,
                              admin_pword
                          )
                          VALUES (
                              1,
                              'zsyrhill',
                              'asd@gmail.com',
                              'asdasd'
                          );


-- Table: appointments
CREATE TABLE appointments (
    app_id     INTEGER       PRIMARY KEY AUTO_INCREMENT
                             NOT NULL,
    app_date   DATE          NOT NULL,
    app_time   TIME          NOT NULL,
    reason     VARCHAR (150) NOT NULL,
    diagnosis  VARCHAR (150) NOT NULL,
    doctor_id  INTEGER      NOT NULL REFERENCES doctors (doctor_id) ON DELETE CASCADE
                                                            ON UPDATE CASCADE,
                            
    patient_id INTEGER      NOT NULL REFERENCES patients (patient_id) ON DELETE CASCADE
                                                              ON UPDATE CASCADE,
                             
    status_id  INTEGER       NOT NULL
                             REFERENCES appstatus (app_id) ON DELETE CASCADE
                                                           ON UPDATE CASCADE
);


-- Table: appstatus
CREATE TABLE appstatus (
    app_id      INTEGER   PRIMARY KEY   REFERENCES appointments (app_id) ON DELETE CASCADE
                                                              				ON UPDATE CASCADE,
    status_id   INTEGER      NOT NULL,
    status_name VARCHAR (10) NOT NULL
);


-- Table: departments
CREATE TABLE departments (
    dept_id   INTEGER      NOT NULL,
    dept_name VARCHAR (20) NOT NULL,
    doc_id    INTEGER      REFERENCES doctors (doctor_id) ON DELETE CASCADE
                                                          ON UPDATE CASCADE
);


-- Table: doctors
CREATE TABLE doctors (
    doctor_id  INTEGER      PRIMARY KEY AUTO_INCREMENT
                            NOT NULL,
    fname      VARCHAR (20) NOT NULL,
    lname      VARCHAR (20) NOT NULL,
    email      VARCHAR (30) UNIQUE
                            NOT NULL,
    pword      VARCHAR (20) NOT NULL,
    acc_status BOOLEAN      DEFAULT (1) 
                            NOT NULL
);


-- Table: patients
CREATE TABLE patients (
    patient_id INTEGER      PRIMARY KEY AUTO_INCREMENT
                            NOT NULL,
    fname      TIME (20)    NOT NULL,
    lname      VARCHAR (20) NOT NULL,
    age        INTEGER      NOT NULL,
    email      VARCHAR (30) NOT NULL
                            UNIQUE,
    pword      VARCHAR (20) NOT NULL,
    p_address  VARCHAR (50) NOT NULL
                            UNIQUE,
    contact_no INTEGER (11) NOT NULL
                            UNIQUE,
    acc_status BOOLEAN      DEFAULT (1) 
                            NOT NULL
);


-- Table: sched
CREATE TABLE sched (
    doc_id     INTEGER  REFERENCES doctors (doctor_id) ON DELETE CASCADE
                                                       ON UPDATE CASCADE,
    sched_id   INTEGER  NOT NULL,
    sched_date DATE     NOT NULL,
    sched_time TIME (7) NOT NULL
);

