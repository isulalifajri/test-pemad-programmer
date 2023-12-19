<div style="margin-top:5px;">
    <label for="jasa_penawaran" style="margin-left:5px;">Jasa Penawaran</label>
    <div>
        <input type="text" name="jasa_penawaran" id="jasa_penawaran"
        placeholder="input your jasa penawaran" value="{{ old('jasa_penawaran', $data->jasa_penawaran) }}" />
    </div>
    @error('jasa_penawaran')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px;">
    <label for="price" style="margin-left:5px;">Price</label>
    <div>
        <input type="text" name="price" id="price"
        placeholder="except : 200.000" value="{{ old('price', $data->price) }}" />
    </div>
    @error('price')
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

@push('masking')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
        // Format mata uang.
            $('#price').mask('#.##0', {reverse: true});

        })


    </script>
@endpush

