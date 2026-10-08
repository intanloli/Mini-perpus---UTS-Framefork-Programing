<div class="mb-3">
    <label for="category_id" class="form-label">Kategori</label>
    <select id="category_id" name="category_id"
        class="form-select @error('category_id') is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $cat)
        <option value="{{ $cat->id }}"
            @selected(old('category_id', $book->category_id ?? '') == $cat->id)>
            {{ $cat->name }}
        </option>
        @endforeach
    </select>
    @error('category_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="title" class="form-label">Judul Buku</label>
    <input type="text" id="title" name="title"
        class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $book->title ?? '') }}">
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="author" class="form-label">Penulis</label>
    <input type="text" id="author" name="author"
        class="form-control @error('author') is-invalid @enderror"
        value="{{ old('author', $book->author ?? '') }}">
    @error('author')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="published_year" class="form-label">Tahun Terbit</label>
    <input type="text" id="published_year" name="published_year"
        class="form-control @error('published_year') is-invalid @enderror"
        value="{{ old('published_year', $book->published_year ?? '') }}">
    @error('published_year')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stok</label>
    <input type="text" id="stock" name="stock"
        class="form-control @error('stock') is-invalid @enderror"
        value="{{ old('stock', $book->stock ?? 0) }}">
    @error('stock')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>