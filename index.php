<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <?php 
        $birthdate = new DateTime();
        var_dump($birthdate instanceof DateTime);
        $currentTime = new DateTime();

         class Student {
            private string $lastName;
            private string $firstName;
            private DateTime $birthdate;
            private string $schoolLevel;
            private string $schoolName;


            public function __construct(string $lastName, string $firstName, DateTime $birthdate, string $schoolLevel)
            {
                $this-> lastName = $lastName;
                $this-> firstName = $firstName;
                $this-> birthdate = $birthdate;
                $this-> schoolLevel = $schoolLevel;
            }

            public function getLastName():string {
                return $this-> lastName;
            }

            public function setLastName(string $lastName) {
                $this-> lastName = $lastName;
            }

            public function getFirstName():string {
                return $this-> firstName;
            }

            public function setFirstName(string $firstName) {
                $this-> firstName = $firstName;
            }

            public function getBirthdate() {
                return $this-> birthdate;
            }


            public function getSchoolLevel(): string {
                return $this-> schoolLevel;
            }

            public function setSchoolLevel(string $schoolLevel) {
                $this-> schoolLevel = $schoolLevel;
            }

            public function getSchoolName():string {
                return $this-> schoolName;
            }

            public function setSchoolName(string $schoolName) {
                $this-> schoolName = $schoolName;
            }

            public function getCurrentDate():DateTime {
                return new DateTime();
            }

            public function getAge ():int {
                return $this->getBirthdate()-> diff($this->getCurrentDate())->y;
            }

            public function __toString() {
                return 'Bonjour, je m\'apelle ' . $this->firstName . ' ' . $this->lastName . ', j\'ai ' . $this->getAge() . ' ans et je vais à l\'école ' . $this->getSchoolName() . ' en  class de ' . $this->getSchoolLevel() . '.';
            }



        }
        
        
        ?>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
            <?php

            // $student1 = new Student("Vaillant", "Michel", 10, "CM1");
            // $student2 = new Student("Dupont", "Jean", 16, "3e");
            $student1 = new Student("Vaillant", "Michel", new DateTime("2012-04-21"), "CM1");
            $student2 = new Student("Dupont", "Jean", new DateTime("2017-09-30"), "3e");
            
            var_dump($student1);
            var_dump($student2);
            ?>
            </div>
        </section>
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
            <?php 
            $student1->setSchoolLevel("CP"); 
            $student2->setSchoolLevel("4e"); 

            var_dump($student1);
            var_dump($student2);
            
            ?>
            </div>
        </section>
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
            <?php
            // voir la question 1
            ?>
            </div>
        </section>
        
        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            
            var_dump($student1-> getAge());
            echo $student1->getFirstName() . " a " . $student1->getAge() . ' ans.';
            echo "<br>";
            echo $student2->getFirstName() . " a " . $student2->getAge() . ' ans.';
            
            ?>

            </div>
        </section>
        
        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            $student1-> setSchoolName("Ecole Julien Bodin");
            $student2-> setSchoolName("College Jean Monnet");
            var_dump($student1);
            var_dump($student2);
            
            ?>
            </div>
        </section>
        
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
            //__toString
            echo $student1;
            echo "<br>";
            echo $student2;
            
            ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>
</html>