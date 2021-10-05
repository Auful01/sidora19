@extends('layout.header')

@section('content')
    <!-- content -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Rumah Sakit / Klinik</li>
            </ol>
        </div><!--/.row-->
       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rumah Sakit / Klinik</h1>
            </div>
        </div><!--/.row-->

        @if($message=Session::get('success'))
        <div class="alert bg-teal" role="alert">
            <em class="fa fa-lg fa-check">&nbsp;</em> 
           {{$message}}
        </div>
        @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <p align="left"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddRumahSakit">
                          Add Rumah Sakit
                        </button></p>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="table-responsive">
                            <table class="table table-striped b-t b-b" id="tableok">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <!-- <th>Link Gmaps</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($hospital as $hs)                                   
                                    <tr>
                                      <input type="hidden" class="delete" value="{{$hs->id}}">
                                        <td>{{$hs->id}}</td>
                                        <td>{{$hs->name_hospital}}</td>
                                        <td>{{$hs->village->name}}, {{$hs->district->name}} , {{$hs->regency->name}}, {{$hs->province->name}}</td>
                                        <td>{{$hs->wa_hospital}}</td>
                                        <!--  <td>https://goo.gl/maps/S8bCiUdjm9mtVmy69</td> -->
                                        <td>
                                          <form action="{{ route('hospital.destroy',$hs->id) }}" method="POST">
                                            <a href="" ><i style="color:black;" class="fa fa-users"></i></a>
                                            &nbsp;
                                            <a href="" ><i style="color:yellow;" class="fa fa-tint"></i></a>
                                            &nbsp;
                                            <a href="" ><i style="color:red;" class="fa fa-users"></i></a>
                                            &nbsp;
                                            <a href="" class="btn-modal-detailRs" data-toggle="modal" data-target="#DetailRs" data-kode="{{ $hs->id }}" data-nama="{{$hs->name_hospital}}" data-alamat="{{$hs->village->name}}, {{$hs->district->name}} , {{$hs->regency->name}}, {{$hs->province->name}}" data-wa="{{$hs->wa_hospital}}" data-telp="{{$hs->phone_hospital}}" data-email="{{$hs->email_hospital}}" data-opr="{{$hs->operation_info_hospital}}" data-maps="{{$hs->link_maps_hospital}}" data-url= "{{route('hospital.update', $hs->id)}}"><i style="color:blue;" class="fa fa-eye" ></i></a>
                                            &nbsp;
                                            <a href="" class="btn-modal-editRs" data-toggle="modal" data-target="#EditRs" data-kode="{{ $hs->id }}" data-nama="{{$hs->name_hospital}}" data-alamat="{{$hs->village->name}}, {{$hs->district->name}} , {{$hs->regency->name}}, {{$hs->province->name}}" data-wa="{{$hs->wa_hospital}}" data-telp="{{$hs->phone_hospital}}" data-email="{{$hs->email_hospital}}" data-opr="{{$hs->operation_info_hospital}}" data-maps="{{$hs->link_maps_hospital}}" data-url= "{{route('hospital.update', $hs->id)}}"><i style="color:orange;" class="fa fa-pencil"></i></a>
                                            &nbsp;
                                            
                                           
                                           @csrf
                                                  @method('DELETE')
                                              <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus?')" class="btn btn-danger btn-delete"><i style="color:white;" class="fa fa-trash"></i></button>
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
                </div><!-- /.panel-->
    </div>  <!--/.main-->

     <!-- The Modal -->
  <div class="modal" id="AddRumahSakit">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Rumah Sakit</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form role="form" action="{{route('hospital.store')}}" method="POST">
                @csrf
        <div class="form-group">
            <label>Nama Rumah Sakit</label>
            <input class="form-control" name="name_hospital" id="name_hospital" placeholder="Nama Rumah Sakit">
        </div>
        <div class="form-group">
          <label>No. Telpon RS</label>
          <input class="form-control" name="phone_hospital" id="phone_hospital" placeholder="ex : 021xxxxx">
      </div>
      <div class="form-group">
        <label>No. WA Rumah Sakit</label>
        <input class="form-control" name="wa_hospital" id="wa_hospital" placeholder="ex : 08xxxx">
      </div>
      <div class="form-group">
        <label>Email Rumah Sakit</label>
        <input class="form-control" name="email_hospital" id="email_hospital" placeholder="ex. dummy@gmail.com">
      </div>
      <div class="form-group">
        <label>Info Operasi Rumah Sakit</label>
        <input class="form-control" name="operation_info_hospital" id="operation_info_hospital" placeholder="Info Operasi Rumah Sakit">
      </div>
      <div class="form-group">
        <label>Alamat Rumah Sakit</label>
        {{-- <input class="form-control" name="address_hospital" id="address_hospital" placeholder="ex. Ds.punggul kec.xxxx kab.xxx"> --}}
        <h5>Provinsi</h5>
        <select class="form-control province" name="province" id="province">
          <option value="">Pilih Provinsi</option>
          @foreach ($province as $p)
              <option value="{{$p->id}}">{{$p->name}}</option>
          @endforeach
        </select>
        <h5>Kabupaten/Kota</h5>
        <select class="form-control regency" name="regency" id="regency">

        </select>
        <h5>Kecamatan</h5>
        <select class="form-control district" name="district" id="district">

        </select>
        <h5>Desa/Kelurahan</h5>
        <select class="form-control village" name="village" id="village">

        </select>
      </div>
      <div class="form-group">
        <label for="stok">Stok Plasma Darah</label>
        <input class="form-control" type="number" name="plasdar" id="plasdar">
      </div>
      <div class="form-group">
        <label>Link Maps Rumah Sakit</label>
        <input class="form-control" name="link_maps_hospital" id="link_maps_hospital" placeholder="ex. hhtps://maps.google.xxxxxx">
      </div>

    
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  

  <div class="modal" id="EditRs">
   <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Edit Rumah Sakit</h4>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
        <form role="form" action="" class="url" method="POST">
          @csrf
          @method('PUT')
              <div class="form-group">
                  <label>Nama Rumah Sakit</label>
                  <input class="form-control nama" name="name_hospital" id="name_hospital" placeholder="Nama Rumah Sakit">
              </div>
              <div class="form-group">
                <label>No. Telpon RS</label>
                <input class="form-control telepon" name="phone_hospital" id="phone_hospital" placeholder="ex : 021xxxxx">
            </div>
            <div class="form-group">
              <label>No. WA Rumah Sakit</label>
              <input class="form-control wa" name="wa_hospital" id="wa_hospital" placeholder="ex : 08xxxx">
            </div>
            <div class="form-group">
              <label>Email Rumah Sakit</label>
              <input class="form-control email" name="email_hospital" id="email_hospital" placeholder="ex. dummy@gmail.com">
            </div>
            <div class="form-group">
              <label>Info Operasi Rumah Sakit</label>
              <input class="form-control opr" name="operation_info_hospital" id="operation_info_hospital" placeholder="Info Operasi Rumah Sakit">
            </div>
            <div class="form-group">
              <label>Alamat Rumah Sakit</label>
              <input class="form-control alamat" name="address_hospital" id="address_hospital" placeholder="ex. Ds.punggul kec.xxxx kab.xxx">
            </div>
            <div class="form-group">
              <label>Link Maps Rumah Sakit</label>
              <input class="form-control maps" name="link_maps_hospital" id="link_maps_hospital" placeholder="ex. hhtps://maps.google.xxxxxx">
            </div>
        </div>
  
  <!-- Modal footer -->
  <div class="modal-footer">
   <button type="submit" class="btn btn-info">Submit</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
  </form>
     </div>
   </div>
  </div>
  
    <div class="modal" id="DeleteRumahSakit">
   <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Delete Rumah Sakit</h4>
         
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
          <h5>Are you sure you want to delete data, if the data is deleted it will also delete data related to this data! this action cannot be canceled</h5>
       </div>
       
       <!-- Modal footer -->
       <div class="modal-footer">
        <a href="" class="btn btn-info">Yes</a>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
  </div>

 
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="DetailRs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
       
        <div class="col-md-3" style="margin-left: 20px">
           Nama RS  
        </div>
        <div class="col-md-8 " >
          <p class="nama"></p>
        </div>
        <div class="col-md-3" style="margin-left: 20px">
           Alamat 
        </div>
        <div class="col-md-8 ">
          <p class="alamat"></p>
        </div>
        <div class="col-md-3" style="margin-left: 20px">
           Whatsapp 
        </div>
        <div class="col-md-8 ">
          <p class="wa"></p>
        </div>
        <div class="col-md-3" style="margin-left: 20px">
           Email 
        </div>
        <div class="col-md-8 ">
          <p class="email"></p>
        </div>
        <div class="col-md-3" style="margin-left: 20px">
           Telepon  
        </div>
        <div class="col-md-8 ">
          <p class="telepon"></p>
        </div>
        <div class="col-md-3" style="margin-left: 20px">
          Operator  
       </div>
       <div class="col-md-8">
        <p class="opr"></p>
       </div>
       <div class="col-md-3" style="margin-left: 20px">
           Maps 
        </div>
        <div class="col-md-8 ">
          <a href="" class="maps" target="_blank">Maps</a>
        </div>
        
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
