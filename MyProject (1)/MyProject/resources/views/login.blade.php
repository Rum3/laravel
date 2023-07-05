<link rel="stylesheet" href="{{asset('css/form.css')}}">
<form method="post" action="/users/login">
    @csrf

    <div>
        <label for="name">Име</label>
        <input type="name" name="name" id="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <p style="color:red">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

    @if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="error-message">
        {{ session('error') }}
    </div>
@endif
</form>
