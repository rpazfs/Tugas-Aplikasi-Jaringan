<div>
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Landing Page</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/committee">Home</a></li>
                                <li class="breadcrumb-item active"><a href="/committee/dashboard">Dashboard</a></li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                        </div>
                        <!-- /.content-header -->
                <div class="card">                    
                    <div class="card-header">
                        <b>Committee</b> | Landing Page
                    </div>
                    <div class="card-body">
                        <div class="header">
                            <h3>
                                Halo, {{ Auth::user()->name }}
                            </h3>
                            <p>Welcome to Internation Symposium on Material and Electrical Engineering
                            (ISMEE) 2021</p>          
                        </div>                        
                        <div class="images">
                            <img src="{{asset('/images/view.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
