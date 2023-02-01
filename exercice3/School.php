
<?php

class school {

    // private attribute
    private int $id;
    private User $teacher;
    private array $students;

    // public constructor
    public function __construct(User $teacher)
    {
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getTeacher() : string
    {
        return $this->teacher;
    }
    public function getStudents() : string
    {
        return $this->students;
    }

    // public setter
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    public function setTeacher(User $teacher) : void
    {
        $this->teacher = $teacher;
    }
    public function setStudents(string $students) : void
    {
        $this->students = $students;
    }

    // addStudent qui prend un Student en paramètre et l'ajoute au tableau des students et renvoie le tableau des students
    public function addGrade(Student $student) : array
    {
        array_push($students, $student);
        return $this->students;
    }

    // removeStudent qui prend un Student en paramètre et le retire du tableau des students et renvoie le tableau des students
    public function removeGrade(int $student) : array
    {
        for ($i=0; $i<count($this->students); $i++){
            if ($this->students[$i]===$student){
                unset($this->students[$i]);
                return $this->students;
            }
        }
    }
}

?>