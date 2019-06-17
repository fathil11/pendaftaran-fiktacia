@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pendaftaran</div>
                    <div class="panel-body">
                        <form action="{{ url('/daftar') }}" method="post">
                            
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="nama ...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email ...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telpon</label>
                                <input type="text" class="form-control" name="telp" placeholder="telpon ...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Acara</label>
                                <select class="form-control" name="jenis_acara">
                                    <option>-- Jenis Acara --</option>
                                    <option value="LOMBA COMIC STRIP">LOMBA COMIC STRIP</option>
                                    <option value="LOMBA DESAIN POSTER">LOMBA DESAIN POSTER</option>
                                    <option value="LOMBA ESPORT MOBILE LEGEND">LOMBA ESPORT MOBILE LEGEND</option>
                                    <option value="LOMBA ESSAY">LOMBA ESSAY</option>
                                    <option value="LOMBA VLOG">LOMBA VLOG</option>
                                    <option value="WORKSHOP FOOD PHOTOGRAPHY">WORKSHOP FOOD PHOTOGRAPHY</option>
                                    <option value="TALKSHOW Grow with Open Source">TALKSHOW Grow with Open Source</option>
                                    <option value="TALKSHOW SMART CITY">TALKSHOW SMART CITY</option>
                                    <option value="WORKSHOP MOBILE ANDROID">WORKSHOP MOBILE ANDROID</option>
                                    <option value="WORKSHOP PWA">WORKSHOP PWA</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
