<div class="login-page">

    <div class="login-card">

        <div class="login-header">
            <h1>Login Admin</h1>
        </div>

        <form action="{{ route('loginproses') }}" method="POST">
            @csrf

            <div class="login-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Email">
            </div>

            <div class="login-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan Password">
            </div>

            <button class="login-btn" type="submit">
                Login
            </button>
        </form>

    </div>

</div>