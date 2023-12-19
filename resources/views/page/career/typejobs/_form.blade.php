<div style="margin-top:5px;">
    <label for="type_job" style="margin-left:5px;">Type Job</label>
    <div>
        <input type="text" name="type_job" id="type_job"
        placeholder="input type jobs" value="{{ old('type_job', $data->type_job) }}" />
    </div>
    @error('type_job')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

