<!DOCTYPE html> 
<html>
<head>
    <title>Edit Item</title> <!-- Menentukan judul halaman -->
</head>
<body>
    <h1>Edit Item</h1> <!-- Heading utama halaman -->
    <!-- Form untuk mengedit item, mengarah ke route 'items.update' dengan parameter $item -->
    <form action="{{ route('items.update', $item) }}" method="POST"> 
        @csrf <!-- Token CSRF untuk keamanan terhadap serangan CSRF -->
        @method('PUT') <!-- Menggunakan metode PUT untuk mengupdate data -->
        <!-- Label dan input untuk nama item -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required> <!-- Input teks dengan nilai default dari $item->name -->
        <br>
        <!-- Label dan textarea untuk deskripsi item -->
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea> <!-- Textarea dengan nilai default dari $item->description -->
        <br>
        <button type="submit">Update Item</button> <!-- Tombol submit untuk mengupdate item -->
    </form>
    <!-- Link untuk kembali ke daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>
