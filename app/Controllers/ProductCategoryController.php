<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProductCategoryController extends BaseController
{
    protected $category;

    function __construct()
    {
        $this->category = new ProductCategoryModel();
    }

    public function index()
    {
        $category = $this->category->findAll();
        $data['category'] = $category;

        return view('v_kategori', $data); // Pastikan view ini ada
    }

    public function create()
    {
        $dataForm = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'created_at' => date("Y-m-d H:i:s")
        ];

        $this->category->insert($dataForm);

        return redirect('produk-kategori')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {

        $dataForm = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->category->update($id, $dataForm);

        return redirect('produk-kategori')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $this->category->delete($id);

        return redirect('produk-kategori')->with('success', 'Data berhasil dihapus');
    }
}
