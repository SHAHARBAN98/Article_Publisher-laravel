@extends("layouts.theme")
@section("content")
<form method="post"action="/articles/{{$article->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="">Article Title</label> 
        <input type="text" name="title" value="{{$article->title}}" class="form-controller">

    </div>
    
    <div class="form-group">
        <label for="">Article body</label>
        <textarea  class="form-controller "name="body" cols="" rows="">"{{$article->title}}"</textarea>
        
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        
        </div>
</form>
@endsection