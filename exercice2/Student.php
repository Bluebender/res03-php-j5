<?php

class Student {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades;

    // public constructor
    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = [];
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getGrades() : array
    {
        return $this->grades;
    }

    // public setter
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firtsName;
    }
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    public function setGrades(array $grades) : void
    {
        $this->grades = $grades;
    }

    // getFullName qui ne prend pas de paramètrres et renvoie une string. La string de retour contient le nom complet du Student.
    public function getFullName() : string
    {
        return $this->firstName." ".$this->lastName;
    }
    
    // addGrade qui prend un int en paramètre, le rajoute au tableau grades et renvoie le tableau grades.
    public function addGrade(int $grade) : array
    {
        array_push($this->grades, $grade);
        return $this->grades;
    }

    // removeGrade qui prend un int en paramètre, le retire au tableau grades et renvoie le tableau grades.
    public function removeGrade(int $grade) : array
    {
        // unset($grades[array_search($grade, $grades)]);
        // return $this->grades;
        
        for ($i=0; $i<count($this->grades); $i++){
            if ($this->grades[$i]===$grade){
                unset($this->grades[$i]);
                return $this->grades;
            }
        }
        return $this->grades;
    }

    // getAverage qui ne prend pas de paramètres et renvoie un float qui représente la moyenne des notes du Student.    
    public function getAverage() : ? float
    {
        if (count($this->grades)===0){
            return null;
        }
        else{
            $sum = 0;
            foreach ($this->grades as $key=>$grade){
                $sum = $sum + $grade;
            }
            $average = $sum / count($this->grades);
            return $average;
        }
    }
}

?>