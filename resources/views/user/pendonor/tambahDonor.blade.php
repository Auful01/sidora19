@extends('layout.header');

@section('content')
<div class="container">

    <form action="{{route('donor.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="number" name="phone" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter phone">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
          <select class="custom-select form-control" name="gender">
            <option selected>Open this select menu</option>
            <option value="L">Laki - laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status Covid</label>
          <select class="custom-select form-control" name="status_cov">
            <option selected>Open this select menu</option>
            <option value="0">Positif</option>
            <option value="1">Negatif</option>
          </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Positif</label>
            <input type="date" name="positif" class="form-control" id="positif">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Negatif</label>
            <input type="date" name="negatif" class="form-control" id="negatif">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            {{-- <input type="date" name="negatif" class="form-control" id="negatif"> --}}
            <textarea class="form-control" name="alamat" placeholder="Isi alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Status Donor</label>
            <select class="custom-select form-control" name="status_donor">
              <option selected>Open this select menu</option>
              <option value="sudah">Sudah</option>
              <option value="belum">Belum</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Berat Badan</label>
            <input type="number" name="berat_badan" class="form-control" id="berat_badan">
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
