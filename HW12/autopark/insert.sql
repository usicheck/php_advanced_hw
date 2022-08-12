INSERT INTO cars (model, year, price)
VALUES ('BMW','2022','50'),
       ('Audi','2013','30'),
       ('Lanos','2004','20');

INSERT INTO customers (email,name,surname)
VALUES ('usicheck@gmail.com','Yaroslava','Shturkhal'),
       ('yaroslava@gmail.com','Yasya','Kurbatova'),
       ('yar111@gmail.com','Vasil','Kisil'),
       ('olex@gmail.com','Olexandr','Shturkhal'),
       ('alex@gmail.com','Alexandr','Shturkhal');

INSERT INTO drivers (license_ID,full_name,birthdate)
VALUES ('1234567891234567','Oleg Kurbatov','1993-02-10'),
       ('1234567891234765','Vitaliy Petrov','1994-06-14'),
       ('1234567891234657','Yuriy Sidorov','1984-08-21');

INSERT INTO orders (first_address,destination_address)
VALUES ('str. Stolychna, 34','str. Heroiv Maidany'),
       ('str. Heroiv Maidany, 5','prosp. Yavornytskogo, 105'),
       ('prosp. Yavornytskogo, 105', 'str. Heroiv Maidany');

INSERT INTO parks (serial_number,address)
VALUES ('123765','str. Stolychna, 34'),
       ('132756','str. Heroiv Maidany, 5'),
       ('154326', 'prosp. Yavornytskogo, 105');
