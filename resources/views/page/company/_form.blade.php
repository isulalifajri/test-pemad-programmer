<div style="margin-top:5px">
    @if($data->images)
        <img src="{{ asset('asset/images/company/'.$data->images)}}" class="img-preview" alt="image" height="170px">
    @else
        <img class="img-preview" alt="image" height="170px">
    @endif
    <br>
    <label for="images-prv">Images</label>
    <div class="input-group input-group-merge">
        <input
        type="file"
        accept="image/png, image/gif, image/jpeg, image/jpg, image/webp"
        name="images"
        id="images-prv" onchange="previewImage()" />
      </div>
    <span style="font-size: 11px">*Only uploading images is allowed.</span>
</div>

<div style="margin-top:5px;">
    <label for="name_company" style="margin-left:5px;">Name Company</label>
    <div>
        <input type="text" name="name_company" id="name_company"
        placeholder="input your name company" value="{{ old('name_company', $data->name_company) }}" />
    </div>
    @error('name_company')
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
<div style="margin-top:5px;">
    <label for="contact_info" style="margin-left:5px;">Info Contacts</label>
    <div>
        <textarea name="contact_info" id="contact_info" class="my-editor" cols="30" rows="10">{{ old('contact_info', $data->contact_info) }}</textarea>
    </div>
    @error('contact_info')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>
<div style="margin-top:5px;">
    <label for="jam_kerja" style="margin-left:5px;">Jam Kerja</label>
    <div>
        <textarea name="jam_kerja" id="jam_kerja" class="my-editor" cols="30" rows="10">{{ old('jam_kerja', $data->jam_kerja) }}</textarea>
    </div>
    @error('jam_kerja')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>





<script defer>
    function previewImage(){
       const image =  document.querySelector('#images-prv');
       const imgPreview = document.querySelector('.img-preview');

       imgPreview.style.display = 'block';

       const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
     }
</script>