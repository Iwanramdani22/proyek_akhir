<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $code = "200313011";
    private $name = "Iwan Ramdani";
    private $course;
    private $task;
    private $quiz;
    private $midterm;
    private $final;

    public function myCourse($course, $task, $quiz, $midterm, $final) {
        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->midterm = $midterm;
        $this->final = $final;
        $grade = $this->calculateGrade();

        return view('person.my_view', compact('task', 'quiz', 'midterm', 'final', 'grade' ));
    }

    public function calculateGrade() {
        // ini berfungsi untuk menghitung grade
        $grade = ($this->task * 0.1) + ($this->quiz * 0.1) + ($this->midterm * 0.3) + ($this->final * 0.5);
        return $grade;
        
    }

    // membuat method index
    public function index() {
        // mengembalikan nilai attribute name
        // return $this->name;
        return view("person.index");
    }

    public function show($param) {
        $this->name = $param;
        return $this->name;
    }

    public function sendData() {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    public function data() {
        $names = ["ana", "banu", "cecep", "dadang", "entis"];

        return view("person.data", ['names' => $names]);
    }
}