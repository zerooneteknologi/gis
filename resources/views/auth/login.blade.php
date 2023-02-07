
@include('partials.meta')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
                    <form method="POST" action="{{ route('login')}}">
                        @csrf
						<div class="card-body">
							<img src="{{ asset($setting->logo) }}" alt="{{ $setting->tittelWeb}}" style="max-height: 100px" class="img-fluid mb-4">
							<h4 class="mb-3 f-w-400">Signin</h4>
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="mail"></i></span>
								<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autocomplete="email">
								@error('email')
								<div class="invalid-feedback">
									<strong>{{ $message }}</strong>
								</div>
								@enderror
							</div>
							<div class="input-group mb-4">
								<span class="input-group-text"><i data-feather="lock"></i></span>
								<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
								@error('password')
								<div class="invalid-feedback">
									<strong>{{ $message }}</strong>
								</div>
								@enderror
							</div>
							<div class="form-group text-left mt-2">
								<div class="form-check">
									<input name="remember" class="form-check-input" type="checkbox" value="{{ old('remember') ? 'checked' : '' }}" id="flexCheckChecked" checked>
									<label class="form-check-label" for="flexCheckChecked">
										Remember me
									</label>
								</div>
							</div>
							<button class="btn btn-block btn-primary mb-4" type="submit">Signin</button>
						</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->
@include('partials.footer')