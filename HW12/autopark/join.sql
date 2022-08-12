
SELECT cars.*, parks.id
FROM cars
         LEFT JOIN parks
                   ON cars.park_id = cars.id;


SELECT orders.*, drivers.id
FROM orders
         LEFT JOIN drivers
                   ON orders.driver_id = drivers.id;
