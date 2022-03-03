drop table if exists users;
create table users(
    user_id int PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(99) NOT NULL,
    user_email VARCHAR(99) UNIQUE NOT NULL,
    user_password VARCHAR(99)NOT NULL,
    user_state INT(1) DEFAULT 1,
    user_time_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_time_updated DATETIME DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);