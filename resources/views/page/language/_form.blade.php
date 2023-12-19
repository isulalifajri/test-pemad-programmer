<div style="margin-top:5px;">
    <label for="name_language" style="margin-left:5px;">Reference Language</label>
    <div>
        <input type="text" name="name_language" id="name_language"
        placeholder="input reference language" value="{{ old('name_language', $data->name_language) }}" />
    </div>
    @error('name_language')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

