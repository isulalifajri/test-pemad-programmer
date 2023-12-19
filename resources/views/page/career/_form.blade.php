<div style="margin-top:5px;">
    <label for="title" style="margin-left:5px;">Jobs Position</label>
    <div>
        <input type="text" name="title" id="title"
        placeholder="input jobs position" value="{{ old('title', $data->title) }}" />
    </div>
    @error('title')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px;">
    <label for="typejob_id" style="margin-left:5px;">Type Jobs</label>
    <select name="typejob_id" id="typejob_id">
        <option value="">Select Jobs Type</option>
        @foreach ($typejobs as $type)
            @if(old('typejob_id', $data->typejob_id) == $type->id)
                <option value="{{ $type->id }}" selected>{{$type->type_job}}</option>
            @else 
                <option value="{{ $type->id }}">{{$type->type_job}}</option>
            @endif
        @endforeach
    </select>
    @error('typejob_id')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px;">
    <label for="descript" style="margin-left:5px;">Descripts</label>
    <div>
        <textarea name="descript" id="descript" class="my-editor" cols="30" rows="10">{{ old('descript', $data->descript) }}</textarea>
    </div>
    @error('descript')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

