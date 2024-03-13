<?php

        require("class.user2.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO);

        $objUser->setFirstName("Benito Antonio");
        $objUser->setLastName("Martinez");
        $objUser->setUsername("Badbu");
        $objUser->setPassword("conejitomalo");
        $objUser->setEmailAddress("bb@email.com");
        $objUser->setDateLastLogin("2024-03-13");
        $objUser->setTimeLastLogin("03:33:33");
        $objUser->setDateAccountCreated("2024-03-13");
        $objUser->setTimeAccountCreated("03:33:33");

        print "Primer usuario: <br />";
        print "ID: " . $objUser->getID() . "<br />";
        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Password is " . $objUser->getUsername() . "<br />";
        print "Username is " . $objUser->getPassword() . "<br />";
        print "Email is " . $objUser->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br/><br/>";

        $objUser2 = new User($objPDO);

        $objUser2->setFirstName("Eladio");
        $objUser2->setLastName("Carrion");
        $objUser2->setUsername("Eladios");
        $objUser2->setPassword("papiela");
        $objUser2->setEmailAddress("ela@email.com");
        $objUser2->setDateLastLogin("1990-01-10");
        $objUser2->setTimeLastLogin("23:33:00");
        $objUser2->setDateAccountCreated("2068-06-30");
        $objUser2->setTimeAccountCreated("00:00:00");

        print "Segundo usuario: <br />";
        print "ID: " . $objUser2->getID() . "<br />";
        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Password is " . $objUser2->getUsername() . "<br />";
        print "Username is " . $objUser2->getPassword() . "<br />";
        print "Email is " . $objUser2->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser2->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser2->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br/><br/>";

        $objUser3 = new User($objPDO);

        $objUser3->setFirstName("Gabriel Armando");
        $objUser3->setLastName("Mora");
        $objUser3->setUsername("Mora");
        $objUser3->setPassword("Modelito");
        $objUser3->setEmailAddress("mora@email.com");
        $objUser3->setDateLastLogin("1994-02-24");
        $objUser3->setTimeLastLogin("14:35:14");
        $objUser3->setDateAccountCreated("2070-06-29");
        $objUser3->setTimeAccountCreated("23:48:01");

        print "Tercer usuario: <br />";
        print "ID: " . $objUser3->getID() . "<br />";
        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";
        print "Password is " . $objUser3->getUsername() . "<br />";
        print "Username is " . $objUser3->getPassword() . "<br />";
        print "Email is " . $objUser3->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser3->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser3->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser3->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser3->getTimeAccountCreated() . "<br/><br/>";


        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();

        $cambio = '';
        $cambio = $objUser2->getFirstName();
        $objUser2->setFirstName($objUser->getFirstName());
        $objUser->setFirstName($cambio);
        $cambio = $objUser2->getLastName();
        $objUser2->setLastName($objUser->getLastName());
        $objUser->setLastName($cambio);
        $cambio = $objUser2->getUsername();
        $objUser2->setUsername($objUser->getUsername());
        $objUser->setUsername($cambio);
        $cambio = $objUser2->getPassword();
        $objUser2->setPassword($objUser->getPassword());
        $objUser->setPassword($cambio);
        $cambio = $objUser2->getEmailAddress();
        $objUser2->setEmailAddress($objUser->getEmailAddress());
        $objUser->setEmailAddress($cambio);
        $cambio = $objUser2->getDateLastLogin();
        $objUser2->setDateLastLogin($objUser->getDateLastLogin());
        $objUser->setDateLastLogin($cambio);
        $cambio = $objUser2->getTimeLastLogin();
        $objUser2->setTimeLastLogin($objUser->getTimeLastLogin());
        $objUser->setTimeLastLogin($cambio);
        $cambio = $objUser2->getDateAccountCreated();
        $objUser2->setDateAccountCreated($objUser->getDateAccountCreated());
        $objUser->setDateAccountCreated($cambio);
        $cambio = $objUser2->getTimeAccountCreated();
        $objUser2->setTimeAccountCreated($objUser->getTimeAccountCreated());
        $objUser->setTimeAccountCreated($cambio);

        $objUser3->setFirstName("usuarioDelete3Actualizado");
        $objUser3->setLastName("AusuarioDelete2Actualizado");
        $objUser3->setUsername("UsenameDelete2Actualizado");
        $objUser3->setPassword("password D 2Actualizado");
        $objUser3->setEmailAddress("del2@emailActualizado.com");
        $objUser3->setDateLastLogin("2013-01-05");
        $objUser3->setTimeLastLogin("15:21:14");
        $objUser3->setDateAccountCreated("2012-08-31");
        $objUser3->setTimeAccountCreated("02:01:02");

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();
       
        print "Primer usuario: <br />";
        print "ID: " . $objUser->getID() . "<br />";
        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Password is " . $objUser->getUsername() . "<br />";
        print "Username is " . $objUser->getPassword() . "<br />";
        print "Email is " . $objUser->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br/><br/>";

        print "Segundo usuario: <br />";
        print "ID: " . $objUser2->getID() . "<br />";
        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Password is " . $objUser2->getUsername() . "<br />";
        print "Username is " . $objUser2->getPassword() . "<br />";
        print "Email is " . $objUser2->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser2->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser2->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br/><br/>";

        print "Tercer usuario: <br />";
        print "ID: " . $objUser3->getID() . "<br />";
        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";
        print "Password is " . $objUser3->getUsername() . "<br />";
        print "Username is " . $objUser3->getPassword() . "<br />";
        print "Email is " . $objUser3->getEmailAddress() . "<br />";
        print "Date last login is " . $objUser3->getDateLastLogin() . "<br />";
        print "Time last login is " . $objUser3->getTimeLastLogin() . "<br />";
        print "Date account created is " . $objUser3->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser3->getTimeAccountCreated() . "<br/><br/>";

        
        print "Se ha creado el usuario 1 y ahora se borrara <br/><br/>";
        $objUser->MarkForDeletion();
        unset($objUser);

        print "Se ha creado el usuario 2 y ahora se borrara <br/><br/>";
        $objUser2->MarkForDeletion();
	    unset($objUser2);

        print "Se ha creado el usuario 3 y ahora se borrara <br/><br/>";
        $objUser3->MarkForDeletion();
	    unset($objUser3);
