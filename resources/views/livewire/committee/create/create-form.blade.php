<div>
    <br>
    @if($papers->isNotEmpty())
        <div class="table-responsive users-table">
            <table class="table table-striped table-sm data-table">
                <thead class="thead">
                    <tr>
                        <th width="30%">Title</th>
                        <th class="text-center" width="10%">Status</th>
                        <th class="text-center" width="5%">Edit</th>
                        <th class="text-center" width="5%">Authors</th>
                        <th class="text-center" width="5%">Withdraw</th>
                        <th class="text-center" width="5%">Copyright</th>
                        <th class="text-center" width="5%">Review</th>
                        <th class="text-center" width="5%">Final</th>
                    </tr>
                </thead>
                <tbody id="users-table">
                    @foreach($papers as $paper)
                        <tr>
                            <td>
                                {{$paper->title}}
                            </td>
                            <td class="text-center">
                                status
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-minus-circle" style="color: red"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-copyright"></i>
                                </button>

                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-file"></i>
                                </button>
                            </td class="text-center">
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-file-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @else
        <h5>Silahkan mengisi <b>form</b> dibawah ini untuk membuat jadwal.</h5>
        <br> 
    @endif


<form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Judul:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tgl/bln/thn:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Upload Paper/Journal:</label>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary">Submit</button>
</form>