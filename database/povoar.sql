PRAGMA foreign_key = on;

INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'McDonnald`s', 'FastFood', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 2);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Friends', 'FastFood', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 5);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Al Gusto', 'FastFood', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 8);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Ching Chong, Bing Bong', 'FastFood', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 3);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'FastFood', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);

INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'Mexican', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'Mexican', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'Mexican', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);


INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'African', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'African', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);
INSERT INTO Restaurant(RestaurantName, Category, RestaurantAddress, OwnerId) VALUES ( 'Rui Rielas', 'African', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', 1);






INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'xXxX69420PussySlayer42069XxXx', '123', 'Rua Doctor Roberto Frias s/n, 4200-465 Porto, Portugal', '+351911234567');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('restaurantOwner', 'wackyjohn', '123', 'Praça da Liberdade, 126, 4000-322 Porto, Portugal', '+351915439194');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'child_toucher69', '123', 'Rua Doctor Roberto Frias s/n, 4200-465 Porto, Portugal', '+35191538729349');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'xXxXsmokeweedeveryday420XxXx', '123', 'Rua professor Duarte Leite , 0583-125 Porto, Portugal', '+3519104818374');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'my_father_beats_me_everyday', '123', 'Rua Alcunha Da Mata , 7680-102 Porto, Portugal', '+351910473628');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'sir_cums_allot', '123', 'Rua Antonio D`Augusta, 5325-481 Porto, Portugal', '+3519112309573');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('restaurantOwner', 'COME_TO_BRASIUUUEUUEUEUEUE', '123', 'Rua Almirante Reis 2344-130 Porto, Portugal', '+3519111239573');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'super_mario', '123', 'Rua ALguidar Bandeiras, 6521-213 Porto, Portugal', '+35191103947532');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('Customer', 'tommy', '123', 'Praça Don Afonso D`Almier, 3432-542 Porto, Portugal', '+3519118503648');
INSERT INTO User(Type, UserName, Password, UserAddress, PhoneNumber) VALUES ('restaurantOwner', 'monkey_soup', '123', 'Rua Santo Antonio, 5421-090 Porto, Portugal', '+3519157829426');

INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Big Mc', 4.50, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('CBO', 6.50, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Sundae', 1.50, '', 'Dessert');

INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Bitoque', 7.40, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Peixe do dia', 5.30, '', 'Fish');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Bacalhau cozido com grao', 6.90, '', 'Fish');

INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Pizza Margarita', 7.80, '', 'Vegetarian');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Pasta al Neri', 8.00, '', 'Fish');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Lasagna', 6.60, '', 'Meat');

INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Xau Ming de vaca', 8.70, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Pato a Pequim', 9.90, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Chop suey de gambas', 7.80, '', 'Fish');

INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Bife a casa', 5.00, '', 'Meat');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Lulas fritas', 6.50, '', 'Fish');
INSERT INTO Dish(Name, Price, Photo, Category) VALUES ('Prato de legumes', 9.90, '', 'Vegetarian');

INSERT INTO FoodOrder(OrderDate, OrderState, User, Dish) VALUES ('2007-01-01 20:01:51', 'Ready', 2, 11);
INSERT INTO FoodOrder(OrderDate, OrderState, User, Dish) VALUES ('2007-01-01 12:58:15', 'Preparing', 4, 2);
INSERT INTO FoodOrder(OrderDate, OrderState, User, Dish) VALUES ('2007-01-01 13:43:12', 'Delivered', 7, 8);
INSERT INTO FoodOrder(OrderDate, OrderState, User, Dish) VALUES ('2007-01-01 13:09:29', 'Ready', 9, 4);
INSERT INTO FoodOrder(OrderDate, OrderState, User, Dish) VALUES ('2007-01-01 19:43:40', 'Received', 10, 15);

INSERT INTO Review(ReviewText, ReviewScore, RestaurantId, User) VALUES ('very good, very nice, me like 10/10', 5, 2, 1);
INSERT INTO Review(ReviewText, ReviewScore, RestaurantId, User) VALUES ('was alright', 3, 3, 8);
INSERT INTO Review(ReviewText, ReviewScore, RestaurantId, User) VALUES ('what a shit show', 1, 1, 6);
INSERT INTO Review(ReviewText, ReviewScore, RestaurantId, User) VALUES ('pretty good not gonna lie', 4, 4, 2);
INSERT INTO Review(ReviewText, ReviewScore, RestaurantId, User) VALUES ('they better get their shit together fr fr', 2, 5, 10);

INSERT INTO DishOrder(OrderId, DishId) VALUES (1, 11);
INSERT INTO DishOrder(OrderId, DishId) VALUES (2, 2);
INSERT INTO DishOrder(OrderId, DishId) VALUES (3, 8);
INSERT INTO DishOrder(OrderId, DishId) VALUES (4, 4);
INSERT INTO DishOrder(OrderId, DishId) VALUES (5, 15);