CREATE TABLE users (
  id int NOT NULL,
  username varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  hostflag bool NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE conferences (
  id int NOT NULL,
  name varchar(255) NOT NULL,
  hostid int NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (hostid) REFERENCES users (id)
);

CREATE TABLE events (
  id int NOT NULL,
  confid int NOT NULL,
  name varchar(255) NOT NULL,
  FOREIGN KEY (confid) REFERENCES conferences (id)
);

CREATE TABLE registrations (
  id int NOT NULL,
  userid int NOT NULL,
  eventid int NOT NULL,
  confid int NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (userid) REFERENCES users (id)
);


CREATE TABLE eventdocs (
  id int NOT NULL,
  name varchar(255) NOT NULL
);

