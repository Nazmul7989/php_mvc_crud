<?php


class StudentController extends Framework
{
    public function __construct()
    {
        if (!$this->getSession('email')) {
            $this->redirect('UserController/login');
        }
        $this->helper('link');
        $this->studentModel = $this->model('Student');
    }

    public function index()
    {
        $this->view('students');
    }

    public function addStudent()
    {
        $this->view('addStudent');
    }

    public function saveStudent()
    {
        $studentData = [
            'name'          =>  $this->input('name'),
            'email'         =>  $this->input('email'),
            'phone'         =>  $this->input('phone'),
            'nameError'     => '',
            'emailError'    => '',
            'phoneError'    => ''
        ];

        if (empty($studentData['name'])) {
            $studentData['nameError'] = 'Student Name Required!';
        }

        if (empty($studentData['email'])) {
            $studentData['emailError'] = 'Email Required!';
        }

        if (empty($studentData['phone'])) {
            $studentData['phoneError'] = 'Phone No Required!';
        }

        if (empty($studentData['nameError']) && empty($studentData['emailError']) && empty($studentData['phoneError'])) {


            $data = [$studentData['name'],$studentData['email'],$studentData['phone']];


            if ($this->studentModel->addStudent($data)) {
                $this->setFlash('message','Student Added successfully.');
                $this->redirect('StudentController/index');
            }else {
                echo "Student Add failed.";
            }
        }else{
            $this->view('addStudent',$studentData);
        }
    }



}