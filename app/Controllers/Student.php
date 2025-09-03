<?php
namespace App\Controllers;
use App\Models\StudentModel;   

class Student extends BaseController{

    public function index(){
        $model = new StudentModel();
        $data['students'] = $model->findAll();
    return view('student_list/index', $data);
    }
    public function create(){
    return view('student_list/create');
    }
    public function store(){
        $model = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'age' => $this->request->getPost('age'),
            'course' => $this->request->getPost('course'),
        ];
        $model->insert($data);
    return redirect()->to('/Student');
    }
    public function edit($id){
        $model = new StudentModel();
        $data['student'] = $model->find($id);
    return view('student_list/edit', $data);
    }
    public function update($id){
        $model = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'age' => $this->request->getPost('age'),
            'course' => $this->request->getPost('course'),
        ];
        $model->update($id, $data);
    return redirect()->to('/Student');
    }

    public function delete($id){
        $model = new StudentModel();
        $model->delete($id);
    return redirect()->to('/Student');
    }
    

}



?>