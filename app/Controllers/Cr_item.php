<?php

namespace App\Controllers;

class Cr_item extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\Plant_model();
    }

    public function index()
    {
        $dataProduct = $this->model->findAll();
        return view('auth/table', ['plant' => $dataProduct]);
    }

    public function create()
    {
        $dataProduct = $this->request->getPost();
        $this->model->insert($dataProduct);

        return redirect()->to('/Cr_item');

    }

    public function update($id_tnm = null)
    {
        $dataProduct = $this->request->getPost();
        $this->model->where('id_tnm', $id_tnm)->set($dataProduct)->update();

        return redirect()->to('/Cr_item');
    }

    public function delete($id_tnm = null)
    {
        $this->model->delete($id_tnm);

        return redirect()->to('/Cr_item');
    }
}
