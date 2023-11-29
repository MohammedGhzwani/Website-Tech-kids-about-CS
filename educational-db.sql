CREATE TABLE
    `Administrators`(
        `admin_id` INT(11) PRIMARY KEY NOT NULL,
        `admin_full_name` VARCHAR(300) NOT NULL,
        `admin_uname` VARCHAR(400) NOT NULL,
        `admin_email` VARCHAR(300) NOT NULL,
        `admin_pwd` VARCHAR(400) NOT NULL,
        `admin_active` INT(11) NULL DEFAULT 0,
        `admin_notes` TEXT NULL,
        `admin_date` DATE DEFAULT CURRENT_DATE()
    );

CREATE TABLE
    `Volunteers`(
        `volunteer_id` INT(11) PRIMARY KEY NOT NULL,
        `volunteer_name` VARCHAR(400) NOT NULL,
        `volunteer_email` VARCHAR(300) NOT NULL,
        `volunteer_pwd` VARCHAR(400) NOT NULL,
        `volunteer_active` INT(11) NULL DEFAULT 0,
        `volunteer_notes` TEXT NULL,
        `volunteer_date` DATE NULL DEFAULT CURRENT_DATE()
    );

CREATE TABLE
    `Instructors`(
        `instructor_id` INT(11) PRIMARY KEY NOT NULL,
        `instructor_full_name` VARCHAR(300) NOT NULL,
        `instructor_uname` VARCHAR(400) NOT NULL,
        `instructor_email` VARCHAR(300) NOT NULL,
        `instructor_mobile` VARCHAR(400) NOT NULL,
        `instructor_pwd` VARCHAR(400) NOT NULL,
        `instructor_active` INT(11) NULL DEFAULT 0,
        `instructor_notes` TEXT NULL,
        `instructor_date` DATE NULL DEFAULT CURRENT_DATE()
    );

CREATE TABLE
    `AdminInstructors`(
        `admin_instructor_id` INT(11) PRIMARY KEY NOT NULL,
        `admin_instructor_admin_id` INT(11) NOT NULL,
        `admin_instructor_instructor_id` INT(11) NOT NULL,
        `admin_instructor_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (`admin_instructor_admin_id`) REFERENCES `Administrators`(`admin_id`),
        Foreign Key (
            `admin_instructor_instructor_id`
        ) REFERENCES `Instructors`(`instructor_id`)
    );

CREATE TABLE
    `Students`(
        `student_id` INT(11) PRIMARY KEY NOT NULL,
        `student_full_name` VARCHAR(300) NOT NULL,
        `student_uname` VARCHAR(400) NOT NULL,
        `student_email` VARCHAR(300) NOT NULL,
        `student_mobile` VARCHAR(400) NOT NULL,
        `student_pwd` VARCHAR(400) NOT NULL,
        `student_active` INT(11) NULL DEFAULT 0,
        `student_notes` TEXT NULL,
        `student_date` DATE NULL DEFAULT CURRENT_DATE()
    );

CREATE TABLE
    `AdminStudents`(
        `admin_student_id` INT(11) PRIMARY KEY NOT NULL,
        `admin_student_admin_id` INT(11) NOT NULL,
        `admin_student_student_id` INT(11) NOT NULL,
        `admin_student_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (`admin_student_admin_id`) REFERENCES `Administrators`(`admin_id`),
        Foreign Key (`admin_student_student_id`) REFERENCES `Students`(`student_id`)
    );

CREATE TABLE
    `InstructorStudents`(
        `instructor_student_id` INT(11) PRIMARY KEY NOT NULL,
        `instructor_student_instructor_id` INT(11) NOT NULL,
        `instructor_student_student_id` INT(11) NOT NULL,
        `instructor_student_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (
            `instructor_student_instructor_id`
        ) REFERENCES `Instructors`(`instructor_id`),
        Foreign Key (
            `instructor_student_student_id`
        ) REFERENCES `Students`(`student_id`)
    );

CREATE TABLE
    `Courses`(
        `course_id` INT(11) PRIMARY KEY NOT NULL,
        `course_admin_id` INT(11),
        `course_instructor_id` INT(11),
        `course_name` VARCHAR(400) NOT NULL,
        `course_description` VARCHAR(300) NOT NULL,
        `course_unit` INT(11) NOT NULL,
        `course_notes` TEXT NULL,
        `course_date` DATE NULL DEFAULT CURRENT_DATE()
    );

CREATE TABLE
    `CourseStudents`(
        `course_student_id` INT(11) PRIMARY KEY NOT NULL,
        `course_student_course_id` INT(11) NOT NULL,
        `course_student_student_id` INT(11) NOT NULL,
        `course_student_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (`course_student_course_id`) REFERENCES `Courses`(`course_id`),
        Foreign Key (`course_student_student_id`) REFERENCES `Students`(`student_id`)
    );

CREATE TABLE
    `Certifications`(
        `certification_id` INT(11) PRIMARY KEY NOT NULL,
        `certification_admin_id` INT(11) NOT NULL,
        `certification_course_id` INT(11) NOT NULL,
        `certification_name` VARCHAR(400) NOT NULL,
        `certification_description` VARCHAR(300) NOT NULL,
        `certification_notes` TEXT NULL,
        `certification_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (`certification_admin_id`) REFERENCES `Administrators`(`admin_id`),
        Foreign Key (`certification_course_id`) REFERENCES `Courses`(`course_id`)
    );

CREATE TABLE
    `CertificationStudents`(
        `certification_student_id` INT(11) PRIMARY KEY NOT NULL,
        `certification_student_certification_id` INT(11) NOT NULL,
        `certification_student_student_id` INT(11) NOT NULL,
        `certification_student_date` DATE NULL DEFAULT CURRENT_DATE(),
        Foreign Key (
            `certification_student_certification_id`
        ) REFERENCES `Certifications`(`certification_id`),
        Foreign Key (
            `certification_student_student_id`
        ) REFERENCES `Students`(`student_id`)
    );