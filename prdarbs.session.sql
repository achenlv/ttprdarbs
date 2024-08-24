-- select CONCAT(addresses.city, ', ', addresses.street) AS Adrese, 
-- CONCAT(devices.manudacturer, ' ', devices.model) AS Iekarta, 
-- `devices`.`serial_number`, `devices`.`provided_at` from `properties` 
-- left join `devices` on `properties`.`id` = `devices`.`property_id` 
-- left join `addresses` on `devices`.`address_id` = `addresses`.`id` 
-- where `devices`.`property_id` is not null

select properties.name, 
clients.name,
CONCAT(devices.manudacturer, ' ', devices.model) AS Iekarta, 
`devices`.`serial_number`, `devices`.`provided_at` from `properties` 
left join `devices` on `properties`.`id` = `devices`.`property_id` 
left join clients on properties.client_id = clients.id
where `devices`.`property_id` is not null