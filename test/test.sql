CREATE TABLE "City" (
    "id_city" INTEGER AUTO_INCREMENT,
    "name_city" VARCHAR(30),
    "latitude" FLOAT(6), -- долгота
    "longitude" FLOAT(6), -- широта
    "country" VARCHAR(45),
    PRIMARY KEY ("id_city")
);

CREATE TABLE "User" (
    "id_user" INTEGER AUTO_INCREMENT,
    "first_name" VARCHAR(30),
    "second_name" VARCHAR(30),
    "phone" VARCHAR(15),
    "fk_city" INTEGER DEFAULT NULL,
    "address" VARCHAR(45),
    "create_at" TIMESTAMP,
    PRIMARY KEY ("id_user"),
    FOREIGN KEY ("fk_city") REFERENCES City("id_city")
);

INSERT INTO User ("id_user", "first_name", "second_name", "phone", "fk_city", "address", "create_at")
    VALUES
        (NULL, 'John', 'Bod', '123456789', NULL, 'st test', current_timestamp()),
        (NULL, 'Bob', 'Devitson', '123456789', NULL, 'st test', current_timestamp()),
        (NULL, 'Nike', 'Adrion', '123456789', NULL, 'st test', current_timestamp()),
        (NULL, 'Tomy', 'Figure', '123456789', NULL, 'st test', current_timestamp());

INSERT INTO City 
    VALUES
        (NULL, 'London', '51.509865', '-0.118092', 'Great Britain'),
        (NULL, 'Kiev', '50.4547', '30.5238', 'Ukraine'),
        (NULL, 'Berlin', '52.520008', '13.404954', 'Germany');





