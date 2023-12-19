<div style="margin-top:5px;">
    <label for="penawaran_id" style="margin-left:5px;">Penawaran Request</label>
    <select name="penawaran_id" id="penawaran_id">
        <option value="">Select Request Penawaran</option>
        @foreach ($offer as $or)
            @if(old('penawaran_id', $data->penawaran_id) == $or->id)
                <option value="{{ $or->id }}" selected>{{$or->jasa_penawaran}}</option>
            @else 
                <option value="{{ $or->id }}">{{$or->jasa_penawaran}}</option>
            @endif
        @endforeach
    </select>
    @error('penawaran_id')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px;">
    <label for="klien_id" style="margin-left:5px;">Klien</label>
    <select name="klien_id" id="klien_id">
        <option value="">Select Klien</option>
        @foreach ($klien as $kn)
            @if(old('klien_id', $data->klien_id) == $kn->id)
                <option value="{{ $kn->id }}" selected>{{$kn->name}}</option>
            @else 
                <option value="{{ $kn->id }}">{{$kn->name}}</option>
            @endif
        @endforeach
    </select>
    @error('klien_id')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px;">
    <label for="bahasa_id" style="margin-left:5px;">Language</label>
    <select name="bahasa_id" id="bahasa_id">
        <option value="">Select Language</option>
        @foreach ($language as $lang)
            @if(old('bahasa_id', $data->bahasa_id) == $lang->id)
                <option value="{{ $lang->id }}" selected>{{$lang->name_language}}</option>
            @else 
                <option value="{{ $lang->id }}">{{$lang->name_language}}</option>
            @endif
        @endforeach
    </select>
    @error('bahasa_id')
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

