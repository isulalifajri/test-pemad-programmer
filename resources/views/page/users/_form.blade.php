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
@if (last(request()->segments()) == "create")
    <div style="margin-top:5px;">
        <label for="password" style="margin-left:5px;">Password</label>
        <div>
            <input type="password" name="password" id="password"
            placeholder="input your password" value="{{ old('password', $data->password) }}" />
        </div>
        @error('password')
        <div class="err">
            {{ $message }}
        </div>
        @enderror
        <div style="display: flex;gap:10px; margin-top:10px;margin-left:5px;">
            <input type="checkbox" id="remember-me" onclick="myFunction()" style="width: 20px;cursor: pointer;">
            <label for="remember-me" style="text-transform: capitalize">show password</label>
        </div>
    </div>
@endif


<script defer> //atau bisa menggunakan async
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>