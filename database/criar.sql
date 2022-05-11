.mode columns
.header ON

DROP TABLE IF EXIST Restaurant;
DROP TABLE IF EXIST User;
DROP TABLE IF EXIST Dish;
DROP TABLE IF EXIST FoodOrder;
DROP TABLE IF EXIST Review;


CREATE TABLE Restaurant(
    RestaurantId INTEGER autoincrement PRIMARY KEY NOT NULL,
    RestaurantName VARCHAR(100),
    Category VARCHAR(100),
    RestaurantAddress VARCHAR(300),
    OwnerId INTEGER,
	FOREIGN KEY (OwnerId) REFERENCES User(UserId)
);

CREATE TABLE User(
    UserId INTEGER autoincrement PRIMARY KEY,
    Type TEXT CHECK('restaurantOwner', 'Customer') NOT NULL DEFAULT 'Customer',
    UserName VARCHAR(100),
    Password INTEGER,
    UserAddress VARCHAR(300),
    PhoneNumber VARCHAR(9),
    isOwner BOOLEAN,
    isDriver BOOLEAN
);

CREATE TABLE Dish(
    DishId INTEGER autoincrement PRIMARY KEY,
    Name VARCHAR(100),
    Price FLOAT,
    Photo VARCHAR(10),
    Category TEXT CHECK('Meat', 'Fish', 'Vegetarian', 'Diet') NOT NULL DEFAULT 'Food',
    RestaurantId INTEGER,
    FOREIGN KEY (RestaurantId) REFERENCES Restaurant(RestaurantId)
);

CREATE TABLE FoodOrder(
    OrderId INTEGER autoincrement PRIMARY KEY NOT NULL,
    OrderDate DATE,
    OrderState TEXT CHECK('Preparing', 'Ready', 'Delivered', 'Received') NOT NULL DEFAULT 'Preparing',
    User INTEGER,
    Dish INTEGER,
    FOREIGN KEY (User) REFERENCES User(UserId),
    FOREIGN KEY (Dish) REFERENCES Dish(DishId)
);

CREATE TABLE Review(
    ReviewId INTEGER PRIMARY KEY autoincrement NOT NULL,
    ReviewText VARCHAR(500),
    ReviewScore INTEGER(5),
    RestaurantId INTEGER,
    User INTEGER,
    FOREIGN KEY (RestaurantId) REFERENCES Restaurant(RestaurantId),
    FOREIGN KEY (User) REFERENCES User(UserId)
);

CREATE TABLE DishOrder(
    OrderId INTEGER REFERENCES FoodOrder,
    DishId Integer REFERENCES Dish,
    PRIMARY KEY (OrderId, DishId)
);