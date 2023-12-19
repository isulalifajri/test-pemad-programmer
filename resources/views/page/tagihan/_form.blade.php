<div style="margin-top:5px">
    <img class="img-preview" alt="image" height="170px">
    <br>
    <label for="images-prv">Images</label>
    <div class="input-group input-group-merge">
        <input
        type="file"
        accept="image/png, image/gif, image/jpeg, image/jpg, image/webp"
        name="bukti_pembayaran"
        id="images-prv" onchange="previewImage()" required/>
      </div>
    <span style="font-size: 11px">*Only uploading images is allowed.</span>
</div>

<div style="margin-top:5px;">
    <label for="tanggal_pembayaran" style="margin-left:5px;">Tanggal Pembayaran</label>
    <div>
        <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran"
         value="{{ old('tanggal_pembayaran', $data->tanggal_pembayaran) }}" />
    </div>
    @error('tanggal_pembayaran')
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