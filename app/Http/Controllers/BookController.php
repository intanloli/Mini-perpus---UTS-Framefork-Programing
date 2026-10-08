<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->orderBy('id')->get();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Book::create($request->validate($this->rules(), $this->messages()));

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->validate($this->rules(), $this->messages()));

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }

    private function rules(): array
    {
        return [
            'category_id'    => ['required', 'exists:categories,id'],
            'title'          => ['required', 'string', 'max:255'],
            'author'         => ['required', 'string', 'max:100'],
            'published_year' => ['required', 'numeric'],
            'stock'          => ['required', 'integer', 'min:0'],
        ];
    }

    private function messages(): array
    {
        return [
            'category_id.required'    => 'Kategori wajib dipilih.',
            'category_id.exists'      => 'Kategori yang dipilih tidak valid.',
            'title.required'          => 'Judul buku wajib diisi.',
            'title.max'               => 'Judul buku maksimal 255 karakter.',
            'author.required'         => 'Nama penulis wajib diisi.',
            'author.max'              => 'Nama penulis maksimal 100 karakter.',
            'published_year.required' => 'Tahun terbit wajib diisi.',
            'published_year.numeric'  => 'Tahun terbit harus berupa angka.',
            'stock.required'          => 'Stok wajib diisi.',
            'stock.integer'           => 'Stok harus berupa bilangan bulat.',
            'stock.min'               => 'Stok tidak boleh kurang dari 0.',
        ];
    }
}
