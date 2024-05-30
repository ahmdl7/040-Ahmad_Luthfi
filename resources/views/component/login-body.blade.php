<div class="d-flex align-items-center justify-content-center vh-100">
   
    <div class="card py-3 bg-secondary-subtle" style="width: 23rem">
        @if(session()->has('error'))
        <p class="text-center">{{ session('error') }}</p>
        @endif
        <h2 class="text-center">Login Admin</h2>
        <form method="post" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3 px-3">
                <label for="username" class="form-label"
                    >Email</label
                >
                <input type="text" name="email" class="form-control" id="username" />
            </div>
            <div class="mb-4 px-3">
                <label for="password" class="form-label"
                    >Password</label
                >
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    id="password"
                />
            </div>
            <div class="d-grid px-3 pb-3">
                <button class="btn btn-outline-primary" type="submit">
                    Log in
                </button>
            </div>
        </form>
    </div>
</div>