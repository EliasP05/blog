<label for="title">
    {{__('title')}}:
    <input type="text" name="title" id="title" value="{{old('title',$post->title)}}">
    @error('title')
    <br>
        <small style="color:red">{{$message}}</small>
    @enderror
</label>
<br>
<label for="body">
    {{__('body')}}: <br>
    <textarea name="body" id="" cols="30" rows="10">{{old('body',$post->body)}}</textarea>
    @error('body')
    <br>
        <small style="color:red">{{$message}}</small>
    @enderror    
</label> 
<br>