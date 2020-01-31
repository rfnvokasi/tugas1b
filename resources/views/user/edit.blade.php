@extends('layouts.master')

@section('content')
        <h1 style="margin-top:30px;">Edit Data User</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif
        <div class="row">
            <div class="col-lg-12">
            
            
        <form action="/user/{{$user->id}}/update" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input type="text" name="nama_depan" class="form-control" value="{{$user->nama_depan}}"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input type="text" name="nama_belakang" class="form-control" value="{{$user->nama_belakang}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L" @if($user->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if($user->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{$user->agama}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$user->alamat}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </form> 
                 </div>
        </div>

        @endsection  


