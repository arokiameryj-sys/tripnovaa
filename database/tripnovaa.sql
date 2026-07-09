CREATE DATABASE IF NOT EXISTS tripnovaa;
USE tripnovaa;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    mobile VARCHAR(15),
    email VARCHAR(100),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE captains (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    mobile VARCHAR(15),
    vehicle_type VARCHAR(50),
    vehicle_number VARCHAR(30),
    password VARCHAR(255),
    reward_points INT DEFAULT 0
);

CREATE TABLE rides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    captain_id INT,
    pickup_location VARCHAR(255),
    drop_location VARCHAR(255),
    fare DECIMAL(10,2),
    status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE hotels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hotel_name VARCHAR(150),
    city VARCHAR(100),
    price DECIMAL(10,2)
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    booking_type VARCHAR(50),
    booking_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE rewards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    captain_id INT,
    reward_name VARCHAR(100),
    points INT
);