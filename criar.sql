.mode columns
.header on

DROP TABLE IF EXISTS Restaurant;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Dish;
DROP TABLE IF EXISTS FoodOrder;
DROP TABLE IF EXISTS Review;


CREATE TABLE Restaurant(
    RestaurantId INTEGER autoincrement PRIMARY KEY NOT NULL,
    RestaurantName VARCHAR(100),
    Category VARCHAR(100),
    RestaurantAddress VARCHAR(300),
	--CHECK(Category in (''))
);

CREATE TABLE User(
    UserId INTEGER autoincrement PRIMARY KEY,
    Type TEXT CHECK('restaurantOwner', 'Customer', 'Driver') NOT NULL DEFAULT 'Customer',
    UserName VARCHAR(100),
    Password INTEGER,
    UserAddress VARCHAR(300),
    PhoneNumber VARCHAR(9),
);

CREATE TABLE Dish(
    DishId INTEGER autoincrement PRIMARY KEY,
    Name VARCHAR(100),
    Price FLOAT,
    Photo VARCHAR(10),
    Category TEXT CHECK('Meat', 'Fish', 'Vegetarian', 'Diet') NOT NULL DEFAULT 'Food'
);

CREATE TABLE FoodOrder(
    OrderId INTEGER autoincrement PRIMARY KEY NOT NULL,
    OrderDate DATE,
    OrderState TEXT CHECK('Preparing', 'Ready', 'Delivered', 'Received') NOT NULL DEFAULT 'Preparing',
);

CREATE TABLE Review(
    ReviewId INTEGER PRIMARY KEY autoincrement NOT NULL,
    ReviewText VARCHAR(500),
    ReviewScore INTEGER(5)
);
