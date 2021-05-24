@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 bg-dark-100 p-4" style="height: 100vh">
                <h5 class="font-weight-bold">Chats</h5>
            </div>

            <div class="col-lg-9 p-3">

                <div>

                    <div class="bg-grey-100 radius-10 dark mb-3" style="height:75vh">
                        
                    </div>

                    <div class="d-flex">
                            <input type="text" class="form-control mr-4" name="message" placeholder="Type Message Here..." required>
                            <button class="btn bg-secondary"><i class="fa fa-telegram mr-2" aria-hidden="true"></i> Send</button>
                    </div>

                </div>

            </div>
        </div>
        </div>

@endsection