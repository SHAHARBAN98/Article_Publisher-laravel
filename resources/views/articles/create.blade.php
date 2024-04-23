@extends("layouts.theme")
@section("content")
<form method="post"action="/articles">
    @csrf
    <div class="form-group">
        <label for="">Article Title</label>
        <input type="text"value="{{ old('title') }}" name="title" class="form-controller">
      
        @error("title")
        <p style="color:red">{{$errors->first("title")}}</p>
        @enderror
    
    


    </div>
    
    <div class="form-group">
        <label for="">Article body</label>
        <textarea  class="form-controlle" value="{{ old('body') }}"name="body" cols="" rows=""></textarea>
        @error("body")
        <p style="color:red">{{$errors->first("body")}}</p>
        @enderror
        
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        
        </div>
</form>
@endsection