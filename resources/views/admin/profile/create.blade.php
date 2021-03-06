@extends('layouts.profile')

@section('title', 'MYtoreoutput')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
                <h2>Mytoreoutput</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-date">
                  
                  @if( count($errors) > 0 )
                    <ul>
                      @foreach( $errors->all() as $e )
                      <li>{{ $e }}</li>
                      @endforeach
                    </ul>
                  @endif
                  <div class="form-group row">
                    <label class="col-md-2">氏名</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                       <input type="radio" name="gender" value="男性">男性
                       <input type="radio" name="gender" value="女性">女性
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2">部位</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="hobby" value="{{ old('hobby') }}"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2">メニュー</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="introduction" value="{{ old('introduction') }}"></textarea>
                    </div>
                  </div>
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="更新">
                </form>
          </div>
      </div>
  </div>
@endsection