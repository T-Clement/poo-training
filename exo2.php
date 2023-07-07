<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        <?php
        class Teacher {
            private string $firstName;
            private string $lastName;
            private array $subjects;
            private string $teachingSchoolName;

            function __construct($firstName, $lastName)
            {
                $this-> firstName = $firstName;
                $this-> lastName = $lastName;
                
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

            public function getSubjects():array {
                return $this-> subjects;
            }

            public function setSubjects(array $subjects) {
                $this-> subjects = $subjects;
            }

            public function getSchoolName():string {
                return $this-> teachingSchoolName;
            }

            public function setSchoolName($teachingSchoolName) {
                $this->teachingSchoolName = $teachingSchoolName;
            }

            // Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.

            public function addSubject(string $subject) {
                $this-> subjects[] = $subject;
            }

            public function removeSubject(string $subjectName) {
                if(array_search($subjectName, $this->subjects)) {
                    unset($this->subjects[array_search($subjectName, $this->subjects)]);
                }
            }


            public function displaySubjects():string {
                return implode(", ", $this->subjects);
            }


            // "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".

            public function __toString()
            {
                return "Bonjour, je m'appelle " . $this->firstName . " " . $this->lastName . " et j'enseigne à l'école " . $this-> getSchoolName() . " les matières suivantes : " . $this->displaySubjects();
            }

        }
        
        
        ?>




        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            
            $teacher1 = new Teacher("Lucas", "Matheux");
            $teacher1-> setSubjects(["Mathématiques", "Algèbre"]);
            $teacher1->setSchoolName("Collège Jean Monnet");
            var_dump($teacher1);
            $teacher2 = new Teacher("Mireille", "Conjugue");
            $teacher2-> setSubjects(["Français", "Latin"]);
            var_dump($teacher2);
            
            ?>
            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            $teacher1-> setSchoolName("Ecole Primaire");
            var_dump($teacher1);
            $teacher2-> setSchoolName("Université Caen");
            var_dump($teacher2);
            echo "Les 2 professeurs travaillent dans les écoles : " . $teacher1->getSchoolName() . " et " .$teacher2->getSchoolName();
            
            
            ?>
            </div>
        </section>
        
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            $teacher1-> addSubject('Musique');
            var_dump($teacher1);
            $teacher1-> removeSubject('Musique');
            var_dump($teacher1);
            echo "La liste des matières du professeur " . $teacher1-> getFirstName() . " " . $teacher1-> getLastName() . " est " . $teacher1-> displaySubjects();
            echo "<br>";
            echo "La liste des matières du professeur " . $teacher2-> getFirstName() . " " . $teacher2-> getLastName() . " est " . $teacher2-> displaySubjects();  
            ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">
            <?php
            
            echo $teacher1;
            echo '<br>';
            echo $teacher2;
            
            ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>
</html>