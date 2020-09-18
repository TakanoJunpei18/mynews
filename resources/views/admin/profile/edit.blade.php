@extends('layouts.profile')

@section('title', 'プロフィールの編集')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-date">
                  
                  @if( count($errors) > 0 )
                    <ul>
                      @foreach( $errors->all() as $e )
                      <li>{{ $e }}</li>
                      @endforeach
                    </ul>
                  @endif
                  <div class="form-group row">
                    <label class="col-md-2" for="name">氏名</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="gender">性別</label>
                    <div class="col-md-10">
                    <!-- コメント -->
                    <input type="radio" name="gender" {{ $profile_form->gender == "man" ? 'checked="checked"' : ''}}>男性
                    <input type="radio" name="gender" {{ $profile_form->gender == "woman" ? 'checked="checked"' : ''}}>女性
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="hobby">{{ $profile_form->hobby }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="introduction">自己紹介</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                    </div>
                  </div>
                  <div  class="form-group row">
                      <div class="col-md-10">
                          <input type="hidden" name="id" value="{{ $profile_form->id }}">
                          {{ csrf_field() }}
                          <input type="submit" class="btn btn-primary" value="更新">
                      </div>
                  </div>
                 
                </form>
                <div class="row mt-5">
                  <div class="col-md-4 mx-auto">
                    <h2>更新履歴</h2>
                    <ul class="list-group">
                      @if ($profile_form->profileHistories != NULL)
                        @foreach ($profile_form->profileHistories as $history)
                          <li class="list-group-item">{{ $history->edited_at }}</li>
                        @endforeach
                      @endif
                    </ul>
                  </div>
                </div>
          </div>
      </div>
  </div>
@endsection