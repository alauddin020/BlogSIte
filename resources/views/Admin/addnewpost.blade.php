@extends('admin.master')
@section('title') Add-New-Post @endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8">
	        <div class="card">
	        	<div class="card-header"><strong>Add New Post</strong></div>
	            <div class="card-body">
	                <form class="form-horizontal" method="POST" action="{{ route('addnew.post') }}" aria-label="{{ __('Add-New-Post') }}" enctype="multipart/form-data">
                        @csrf
	                    <div class="form-group row mb-3">
	                        <label for="placement" class="col-3 col-form-label">Title</label>
	                        <div class="col-9">
	                            <input name="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" maxlength="250" name="placement" placeholder="Title limit 250 Character" id="placement" value="{{ old('title') }}"  autofocus />
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
	                        </div>
	                    </div>
	                    <div class="form-group row mb-3">
                            <label for="language" class="col-3 col-form-label">Language</label>
                            <div class="col-9">
                            	<select name="language" class="wide" data-plugin="customselect" style="display: none;">
	                                <option value="0">English</option>
	                                <option value="1">Bangla</option>
                            	</select>
                            <div class="nice-select wide" tabindex="0">
                            	<span class="current">English</span>
                            		<ul class="list">
                            			<li data-value="0" class="option selected">English</li><li data-value="1" class="option">Bangla</li>
                            		</ul>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="status" class="col-3 col-form-label">Publish</label>
                            <div class="col-9">
                            	<select name="status" class="wide" data-plugin="customselect" style="display: none;">
	                                <option value="1">Published</option>
	                                <option value="0">Pending</option>
                            	</select>
                            <div class="nice-select wide" tabindex="0">
                            	<span class="current">Published</span>
                            		<ul class="list">
                            			<li data-value="1" class="option selected">Published</li><li data-value="0" class="option">Pending</li>
                            		</ul>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                        </div>
	                    <div class="form-group row mb-3">
	                        <label for="photo" class="col-3 col-form-label">Picture</label>
	                        <div class="col-9">
                                <div class="custom-file">
                                  <input name="photo" type="file" class="custom-file-input{{ $errors->has('photo') ? ' is-invalid' : '' }}"  value="{{ old('photo') }}"  id="photo" lang="es">
                                  <label class="custom-file-label" for="photo">Select Photo</label>
                                </div>
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
	                        </div>
	                    </div>
	                    <div class="form-group row mb-3">
	                        <label for="description" class="col-3 col-form-label">Descriptions</label>
	                        <div class="col-9">
	                            <textarea id="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"  value="{{ old('description') }}"   placeholder="This textarea has a limit of 4000 chars."></textarea>
	                            @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
	                        </div>
	                    </div>
	                    <div class="form-group mb-0 justify-content-end row">
	                        <div class="col-9">
	                            <button type="submit" class="btn btn-info  ">Add Post</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
@endsection