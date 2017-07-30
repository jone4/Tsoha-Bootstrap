-- Lisää INSERT INTO lauseet tähän tiedostoon
 INSERT INTO Kayttaja (nimi, password) VALUES ('Janne', 'kukka123');
 INSERT INTO Kayttaja (nimi, password) VALUES ('Maija', 'leipa87');

INSERT INTO Ystavanetsija(nimi, julkaistu, kuvaus) VALUES ('Janne','11-11-2016', 'Etsin lenkkeilyseuraa');
INSERT INTO Ystavanetsija(kayttaja_id, nimi, julkaistu, kuvaus) VALUES (2, 'Maija','01-05-2017', 'Haluaisin löytää naispuolisia ystäviä');

INSERT INTO Keskustelu (otsikko, aika) VALUES ('Maijan ja Jannen keskustelu', '30-06-2017');

INSERT INTO Tykkays (kayttaja_id, ystavanetsija_id) VALUES (2, 1);

INSERT INTO Viesti (otsikko, aika) VALUES ('Kuka olet?','30-06-2017'); )

INSERT INTO Ystavanetsijan_keskustelu (ystavanetsija_id, keskustelu_id, otsikko) VALUES (2, 1, '1');