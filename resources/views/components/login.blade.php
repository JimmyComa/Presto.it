
<div @if($errors->any() == true && $errors->has('login')) class="modal fade show" id="loginModal" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="loginModalLabel" aria-modal="true" style="display: block" @else class="modal fade" id="loginModal" tabindex="-1"  data-bs-backddrop="static" data-bs-keyboard="false" aria-labelledby="loginModalLabel" aria-hidden="true" @endif >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <button type="button" class="close btn btn-dark fs-4" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-darkblue">
                <div class="container my-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-8 " >
                            <div class="col-12 text-center fc-lightblue">
                                <h1>LOGIN</h1>
                            </div>
                            <div class="col-12">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <label for="email" class="form-label fc-red fs-4">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                                <div id="emailHelp" class="form-text"></div>
                                
                                <div class="my-3">
                                    <label for="password" class="form-label fc-red fs-4">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button  type="submit" class="btn disabledBtn px-5">Login</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center align-items-center mt-5 flex-column">
                                <small class="fc-red" >{{__('ui.RegisterInstead')}}</small>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#registerModal">{{__('ui.navbarSignin')}}</button>
                            </div>
                            
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <p class="text-danger fs-5">{{ $error }}</p>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
