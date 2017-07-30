-- Lisää CREATE TABLE lauseet tähän tiedostoon
CREATE TABLE Kayttaja(
id SERIAL PRIMARY KEY,
nimi varchar(40) NOT NULL,
password varchar(40) NOT NULL
);

CREATE TABLE Ystavanetsija(
id SERIAL PRIMARY KEY,
kayttaja_id INTEGER REFERENCES Kayttaja(id),
nimi varchar(40) NOT NULL,
julkaistu DATE,
status boolean DEFAULT TRUE,
kuvaus varchar(1000)
);

CREATE TABLE Tykkays(
kayttaja_id INTEGER REFERENCES Kayttaja(id),
ystavanetsija_id INTEGER REFERENCES Ystavanetsija(id)
);

CREATE TABLE Keskustelu(
id SERIAL PRIMARY KEY,
otsikko varchar(40) NOT NULL,
aika DATE
);

CREATE TABLE Ystavanetsijan_Keskustelu(
ystavanetsija_id INTEGER REFERENCES Ystavanetsija(id),
keskustelu_id INTEGER REFERENCES Keskustelu(id),
otsikko varchar(40) NOT NULL
);

CREATE TABLE Viesti(
keskustelu_id INTEGER REFERENCES Keskustelu(id),
otsikko varchar(40) NOT NULL,
aika DATE
);
