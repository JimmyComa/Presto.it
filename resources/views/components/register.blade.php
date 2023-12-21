

<div @if($errors->any() && $errors->has('register')) class="modal fade show" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
aria-labelledby="registerModalLabel" aria-modal="true" style="display: block" @else class="modal fade " id="registerModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" data-duck ="{{session("papera")}}@endif ">
    <div class="modal-dialog" >
        <div class="modal-content bg-red register_modal_dimension">
            <div class="modal-header">
                <button type="button" class="close btn btn-dark fs-4 x-btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-darkblue p-md-5">
                <div class="container my-md-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 text-center fc-lightblue ">
                            <h1>{{__('ui.CreateAnAccount')}}</h1>
                        </div>
                        <div class="col-12">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="username" class="form-label fc-red fs-4">Username</label>
                                    <input type="text" class="form-control" id="username" name="name">
                                </div>
                                <label for="email" class="form-label fc-red fs-4">Email</label>
                                <input type="email" class="form-control" id="registeremail" aria-describedby="emailHelp" name="email">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fc-red fs-4">Password</label>
                                <input type="password" class="form-control" id="registerpassword" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fc-red fs-4">{{__('ui.ConfirmPwd')}}</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn disabledBtn px-5">{{__('ui.navbarSignin')}}</button>
                            </div>
                        </form>
                    </div>
                        <div class="d-flex justify-content-center align-items-center mt-5 flex-column">
                            <small class="fc-red" >{{__('ui.LogInstead')}}</small>
                            <button data-bs-toggle="modal" data-bs-target="#loginModal" class="btn" >{{__('ui.navbarLogin')}}</button>
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

