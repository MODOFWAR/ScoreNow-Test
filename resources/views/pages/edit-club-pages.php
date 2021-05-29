@extends("layout.edit-club")

@section('edit_club_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit club</h1>
             <!-- Membuat form untuk membuat club -->
            <form method="post" action="/editclub">
                @csrf
                <div class="form-group">
                    <label for="nama_club">Nama club</label>
                    <input type="text" class="form-control" id="nama_club" placeholder="Masukan nama club" name="nama_club">
                </div>
                <div class="form-group">
                    <label for="akronim">Akronim</label>
                    <input type="text" class="form-control" id="akronim" placeholder="Masukan akronim" name="akronim">
                </div>
                <a href="/crud-club-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection