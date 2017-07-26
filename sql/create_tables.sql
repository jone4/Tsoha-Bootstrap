-- Lisää CREATE TABLE lauseet tähän tiedostoon

CREATE TABLE Kayttaja(
id SERIAL PRIMARY KEY,
nimi varchar(40) NOT NULL,
password varchar(40) NOT NULL
);

CREATE TABLE Ystava(
id SERIAL PRIMARY KEY,
kayttaja_id INTEGER REFERENCES Kayttaja(id),
nimi varchar(40) NOT NULL,
published DATE,
status boolean DEFAULT TRUE,
description varchar(1000)
);
