<div class="mb-3">
    <label>Kode Buku</label>
    <input type="text" name="kode_buku" value="{{ old('kode_buku', $buku->kode_buku ?? '') }}" class="form-control">
    @error('kode_buku') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" value="{{ old('judul', $buku->judul ?? '') }}" class="form-control">
    @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Penulis</label>
    <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis ?? '') }}" class="form-control">
    @error('penulis') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Penerbit</label>
    <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Tahun</label>
    <input type="number" name="tahun" value="{{ old('tahun', $buku->tahun ?? '') }}" class="form-control">
    @error('tahun') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Kategori</label>
    <select name="id_kategori" class="form-control">
        <option value="">-- pilih kategori --</option>
        @foreach($kategoris as $k)
            <option value="{{ $k->id }}" {{ (old('id_kategori', $buku->id_kategori ?? '') == $k->id) ? 'selected' : '' }}>
                {{ $k->nama_kategori }}
            </option>
        @endforeach
    </select>
    @error('id_kategori') <div class="text-danger">{{ $message }}</div> @enderror
</div>
