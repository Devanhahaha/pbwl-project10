<?php

namespace App\Controllers;

use App\Core\Controller;

class Keluarga extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Keluarga();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('keluarga/index', $data);
	}

	public function input()
	{
		$this->dashboard('keluarga/input');
	}

	public function save()
	{
        $this->model->save();
		header('location:' . URL . '/keluarga');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('keluarga/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/keluarga');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/keluarga');
	}
}