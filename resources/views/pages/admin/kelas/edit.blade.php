@extends('layouts.main')

@section('content')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="fa fa-building"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Create Kelas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Form Examples area start-->
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('kelas.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-example-wrap">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Kelas</label>
                                <div class="nk-int-st">
                                    <input type="text" name="kelas" class="form-control input-sm"
                                        placeholder="Masukan Kelas" value="{{ $item->kelas }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form Examples area End-->
@endsection
