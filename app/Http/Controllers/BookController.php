<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Editor;
use App\Models\Language;
use App\Models\Genero;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBook;

class BookController extends Controller
{
    public readonly Book $book;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function index()
    {
        return view('Book/book', [
            'books' => Book::all(),
            'authors' => Author::all(),
            'editoras' => Editor::all(),
            'languages' => Language::all(), // ou 'languages' se preferir
            'generos' => Genero::all(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create', [
            'authors' => Author::all(),
            'editoras' => Editor::all(),
            'languages' => Language::all(),
            'generos' => Genero::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBook $request)
{
    $data = $request->validated(); // se StoreBook valida os campos
    if ($request->hasFile('image_path')) {
        $image = $request->file('image_path');
        $path = $image->store('books', 'public'); // armazena em storage/app/public/books
        $data['image_path'] = 'storage/' . $path; // caminho acessível publicamente
    }

    $created = Book::create($data);

    if ($created) {
        return redirect()->route('books.index')->with('message', 'Livro "' . $created->nome  . '" criado com sucesso');
    }

    return redirect()->route('books.index')->with('message', 'Erro ao criar');
}

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('Book/book_show', ['books' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {


        return view('Book.book_edit', [
            'book' => $book,
            'authors' => Author::all(),
            'languages' => Language::all(),
            'generos' => Genero::all(),
            'editoras' => Editor::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBook $request, string $id)
    {
        $updated = Book::where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('books.index')->with('message', 'Atualizado com sucesso');
        }

        return redirect()->route('books.index')->with('message', 'Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->book->where('id', $id)->delete();

        return redirect()->route('books.index')->with('message', 'Deletado com sucesso');
    }
}
