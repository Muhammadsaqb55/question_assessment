@include('frontend.header')


<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">LOG IN</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl">
                <div class="container text-center">
                    <center>
                        <div class="col-md-6 bg-dark d-flex align-items-center">
                            <div class="wow fadeInUp" data-wow-delay="0.2s" style="padding:1rem !important;">
                                <h5 class="section-title text-danger">Log In</h5>
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password" placeholder="Enter Your Password" required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <label for="password">Your Password</label>
                                            </div>
                                        </div>

                                    
                                     
                                        <div class="col-12">
                                            
                                         
                                                
                                            <div class="col-md-3 offset-md-3" style="float:right;">
                                                
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            
                                            <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                            </label>
                                            </div>
                                            
                                            </div>
                                           
                                        
                                            <button type="submit" class="btn btn-danger w-100 py-3">{{ __('Login') }} </button>
                                        </div>
                                    </div>
                                </form>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a href="{{url('sign-up')}}">
                                    <h5 class="text-start text-danger fw-normal">Register Now</h5>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

@include('frontend.footer')
