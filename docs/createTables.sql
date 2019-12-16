DROP TABLE IF EXISTS player,team,game,sportevent,category;

CREATE TABLE team(
	teamID int NOT NULL AUTO_INCREMENT ,
	teamName text,
	logo text, 
	description text,
	PRIMARY KEY (teamID)
);

CREATE TABLE player(
	playerID int NOT NULL AUTO_INCREMENT,
	playerName text,
	photo text,
	description text,
	seasonScore text, 
	careerScore text,
	_teamID int NOT NULL,
	PRIMARY KEY (playerID),
	FOREIGN KEY (_teamID) REFERENCES team (teamID)
);

CREATE TABLE sportevent(
	eventID int NOT NULL AUTO_INCREMENT,
	eventName text,
	PRIMARY KEY (eventID)
);
CREATE TABLE category(
	categoryID int NOT NULL AUTO_INCREMENT,
	categoryName text,
	PRIMARY KEY (categoryID)
);

CREATE TABLE game(
	matchID int NOT NULL AUTO_INCREMENT,
	score text,
	matchday DATETIME,
	_categoryID int NOT NULL,
	_eventID int NOT NULL,
	_teamID1 int NOT NULL,
	_teamID2 int NOT NULL,
	PRIMARY KEY (matchID),
	FOREIGN KEY (_teamID1) REFERENCES team (teamID),
	FOREIGN KEY (_teamID2) REFERENCES team (teamID),
	FOREIGN KEY (_categoryID) REFERENCES category (categoryID),
	FOREIGN KEY (_eventID) REFERENCES sportevent (eventID)
);