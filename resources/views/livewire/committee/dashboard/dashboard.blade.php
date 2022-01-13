    <div>
        <div class="header">
            <h3>Halo, {{ Auth::user()->name }}</h3>
            <p>Selamat datang kembali</p>
            <br>
        </div>
        <div class="boxes">
        <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>12</h3>

                        <p>Schedule yang harus di tindak lanjuti</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/committee/schedule" class="small-box-footer">See Schedules <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3>10</h3>

                        <p>conference yang harus ditindak lanjuti</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/committee/conference" class="small-box-footer">See Conferences <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Profile yang harus di review</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">See Profiles <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
        </div>
    </div>
    <br><br>
    <div style="display:flex;">
    <div class="images" style="width:50%;">
        <img width="80%"src="{{asset('/images/dashboard.svg')}}" alt="">
    </div>
    <div class="to-do" style="width:50%; align-self:center;">
            <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            To Do List
                            </h3>

                            <div class="card-tools">
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                            <li>
                                <!-- drag handle -->
                                <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <!-- checkbox -->
                                <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                                </div>
                                <!-- todo text -->
                                <span class="text">Membuat profile untuk user</span>
                                <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                <label for="todoCheck3"></label>
                                </div>
                                <span class="text">Mereview profile untuk user</span>
                                <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                <label for="todoCheck4"></label>
                                </div>
                                <span class="text">Menginput paper</span>
                                <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                <label for="todoCheck5"></label>
                                </div>
                                <span class="text">Memasukan topik untuk conference</span>
                                <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                <label for="todoCheck6"></label>
                                </div>
                                <span class="text">Mengedit paper yang telah di submit</span>
                                <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                        </div>
                        </div>
                        <!-- /.card -->
    </div>                 
    </div>
           
    </div>
    
