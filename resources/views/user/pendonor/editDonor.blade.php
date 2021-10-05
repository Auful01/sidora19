@extends('layout.header');

@section('content')
<div class="container">

    <form action="{{route('donor.update',  $donor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" value="{{$donor->nama}}" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"  value="{{$donor->email}}" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="number" name="phone" class="form-control" id="number" aria-describedby="emailHelp" value="{{$donor->phone}}" placeholder="Enter phone">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
          <select class="custom-select form-control" name="gender">
            {{-- <option selected>Open this select menu</option> --}}
            <option value="L" {{$donor->gender == 'L' ? 'selected' : ''}}>Laki - laki</option>
            <option value="P" {{$donor->gender == 'L' ? 'selected' : ''}}>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status Covid</label>
          <select class="custom-select form-control" name="status_cov">
            <option selected>Open this select menu</option>
            <option value="0" {{$donor->status_cov == '0' ? 'selected' : ''}}>Positif</option>
            <option value="1" {{$donor->status_cov == '1' ? 'selected' : ''}}>Negatif</option>
          </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{$donor->tgl_lahir}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Positif</label>
            <input type="date" name="positif" class="form-control" id="positif" value="{{$donor->positif}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Negatif</label>
            <input type="date" name="negatif" class="form-control" id="negatif" value="{{$donor->negatif}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            {{-- <input type="date" name="negatif" class="form-control" id="negatif"> --}}
            <textarea class="form-control" name="alamat" placeholder="Isi alamat" >{{$donor->alamat}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Status Donor</label>
            <select class="custom-select form-control" name="status_donor">
              <option selected>Open this select menu</option>
              <option value="sudah" {{$donor->status_donor == 'sudah' ? 'selected' : ''}}>Sudah</option>
              <option value="belum" {{$donor->status_donor == 'belum' ? 'selected' : ''}}>Belum</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Berat Badan</label>
            <input type="number" name="berat_badan" class="form-control" id="berat_badan" value="{{$donor->berat_badan}}">
        </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
