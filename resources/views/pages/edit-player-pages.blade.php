@extends("layout.edit-player")

@section('edit_player_container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form edit Player</h1>
           
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control" id="nama_pemain" placeholder="Masukan nama pemain" name="nama_pemain">
                </div>
                <div class="form-group">
                    <label for="no_punggung">No punggung</label>
                    <input type="text" class="form-control" id="no_punggung" placeholder="Masukan nomer punggung" name="no_punggung">
                </div>
                <div class="form-group">
                    <label for="no_punggung">Club</label>
                    <input type="text" class="form-control" id="nama_club" placeholder="Masukan nama club" name="nama_club">
                </div>
                <div class="form-group">
                    <label for="gol">Gol</label>
                    <input type="text" class="form-control" id="gol" placeholder="Masukan jumlah gol" name="gol">
                </div>
                <div class="form-group">
                    <label for="assist">Assist</label>
                    <input type="text" class="form-control" id="assist" placeholder="Masukan jumlah assist" name="assist">
                </div>
                <a href="/crud-player-page" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection