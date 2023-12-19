<div style="margin-top:5px;">
    <label for="name" style="margin-left:5px;">Name</label>
    <div>
        <input type="text" name="name" id="name"
        placeholder="input your name" value="{{ old('name', $data->name) }}" />
    </div>
    @error('name')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>
<div style="margin-top:5px;">
    <label for="email" style="margin-left:5px;">Email</label>
    <div>
        <input type="text" name="email" id="email"
        placeholder="input your email" value="{{ old('name', $data->email) }}" />
    </div>
    @error('email')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>
<div style="margin-top:5px;">
    <label for="telephone" style="margin-left:5px;">Telephone</label>
    <div>
        <input type="text" name="telephone" id="telephone"
        placeholder="input your telephone" value="{{ old('telephone', $data->telephone) }}" />
    </div>
    @error('telephone')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>
<div style="margin-top:5px;">
    <label for="address" style="margin-left:5px;">Address</label>
    <div>
        <textarea name="address" id="address" class="my-editor" cols="30" rows="10">{{ old('address', $data->address) }}</textarea>
    </div>
    @error('address')
      <div class="err">
          {{ $message }}
      </div>
    @enderror
</div>

<div style="margin-top:5px">
    <label for="images-prv">Images</label><br>
    @if($data->images)
        <img src="{{ asset('asset/images/kliens/'.$data->images)}}" class="img-preview" alt="image" height="170px">
    @else
        <img class="img-preview" alt="image" height="170px">
    @endif
    <div class="input-group input-group-merge">
        <input
        type="file"
        accept="image/png, image/gif, image/jpeg, image/jpg, image/webp"
        name="images"
        id="images-prv" onchange="previewImage()" />
      </div>
    <span style="font-size: 11px">*Only uploading images is allowed.</span>
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