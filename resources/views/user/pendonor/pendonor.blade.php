@extends('layout.header')

@section('content')
    <div class="container">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Pendonor</li>
            </ol>
        </div><!--/.row-->
       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pendonor</h1>
            </div>
        </div><!--/.row-->

        <div class="panel panel-default">
            <div class="table-responsive">
                <div class="panel-heading">
                    <p align="left"><a type="button" class="btn btn-primary" href="{{route("donor.create")}}">
                     Add Pendonor
                    </a></p>
               </div>
               <div class="panel-body">
                   <table id="myTable" class="table table-striped b-t b-b">
                       <thead>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>No. Telp</th>
                           <th>Gender</th>
                           <th>Status</th>
                           <th>Tanggal Lahir</th>
                           <th>Tanggal Positif</th>
                           <th>Tanggal negatif</th>
                           <th>Alamat</th>
                           <th>Status Donor</th>
                           <th>Usia</th>
                           <th>Berat Badan</th>
                           <th>action</th>
                       </thead>
                   <tbody>
                       @foreach ($donor as $d)
                       <tr>
                           <td>{{$d->nama}}</td>
                           <td>{{$d->email}}</td>
                           <td>{{$d->phone}}</td>
                           <td>{{$d->gender == 'P' ? 'Perempuan' : 'Laki-laki'}}</td>
                           <td>{{$d->status_cov == 0 ?  'Negatif' : 'Positif'}}</td>
                           <td>{{$d->tgl_lahir}}</td>
                           <td>{{$d->positif}}</td>
                           <td>{{$d->negatif}}</td>
                           <td>{{$d->alamat}}</td>
                           <td>{{$d->status_donor}}</td>
                           <td>{{$d->usia}}</td>
                           <td>{{$d->berat_badan}} Kg</td>
                           <td>
                               <form action="{{route('donor.destroy', $d->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                               <a href="{{route('donor.edit', $d->id)}}" class="btn btn-warning"><em class="fa fa-pencil">&nbsp;</em></a>

                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><em class="fa fa-trash">&nbsp;</em></button>
                                </form>
                           </td>
                       </tr>
                       @endforeach
                       
                   </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
@endsection