<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class DiskonController extends BaseController
{
    protected $diskon;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->diskon = new DiskonModel();
    }

    public function index()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('failed', 'Akses ditolak. Hanya admin yang dapat mengakses menu ini.');
        }

        $data['diskon'] = $this->diskon->findAll();
        return view('v_diskon', $data);
    }

    public function create()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('failed', 'Akses ditolak.');
        }

        $rules = [
        'tanggal' => [
            'rules' => 'required|is_unique[diskon.tanggal]',
            'errors' => [
                'required'   => 'The tanggal field is required',
                'is_unique'  => 'The tanggal field must contained a unique value'
            ]
        ],
        'nominal' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'The nominal field is required',
                'numeric'  => 'The nominal field must be a number'
            ]
        ]
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $this->diskon->save([
        'tanggal' => $this->request->getPost('tanggal'),
        'nominal' => $this->request->getPost('nominal'),
    ]);

    return redirect()->to('diskon')->with('success', 'Data berhasil ditambahkan.');
}

    public function edit($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('failed', 'Akses ditolak.');
        }

        $diskon = $this->diskon->find($id);

        if (!$diskon) {
            return redirect()->to('diskon')->with('failed', 'Diskon tidak ditemukan.');
        }

        $rules = [
            'nominal' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskon->update($id, [
            'nominal' => $this->request->getPost('nominal')
        ]);

        return redirect()->to('diskon')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('failed', 'Akses ditolak.');
        }

        $this->diskon->delete($id);
        return redirect()->to('diskon')->with('success', 'Data berhasil dihapus.');
    }
}
