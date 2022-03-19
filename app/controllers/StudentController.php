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
        $data = $this->studentModel->getAllStudents();

        $this->view('students',$data);
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

    public function editStudent($id)
    {
        $student = $this->studentModel->getOneStudent($id);
        $data = [
          'student'       => $student,
          'nameError'  => '',
          'phoneError' => '',
          'emailError' => ''
        ];
        $this->view('editStudent',$data);
    }

    public function updateStudent()
    {
        $id = $this->input('id');

        $studentData = [
            'name'          =>  $this->input('name'),
            'phone'         =>  $this->input('phone'),
            'email'         =>  $this->input('email'),
            'nameError'     => '',
            'phoneError'    => '',
            'emailError'    => ''
        ];

        if (empty($studentData['name'])) {
            $studentData['nameError'] = 'Student Name Required!';
        }

        if (empty($studentData['phone'])) {
            $studentData['phoneError'] = 'Phone No Required!';
        }

        if (empty($studentData['email'])) {
            $studentData['emailError'] = 'Email Required!';
        }


        if (empty($studentData['nameError']) && empty($studentData['phoneError']) && empty($studentData['emailError'])) {


            $data = [$studentData['name'],$studentData['phone'],$studentData['email']];


            if ($this->studentModel->updateStudent($data,$id)) {
                $this->setFlash('message','Student updated successfully.');
                $this->redirect('StudentController/index');
            }else {
                echo "Student update failed.";
            }
        }else{
            $this->view('editStudent',$studentData);
        }
    }

    public function deleteStudent($id)
    {
        $this->studentModel->deleteStudent($id);
        $this->redirect('StudentController/index');
    }



}