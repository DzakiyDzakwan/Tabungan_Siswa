 {{-- Table SECTION SISWA--}}
 <div class="container-fluid">
  <div class="table-responsive shadow">
      <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-8"><h2><strong>Siswa</strong></h2></div>
                  <div class="col-sm-4">
                      <div class="search-box">
                          <i class="material-icons">&#xE8B6;</i>
                          <input type="text" class="form-control" placeholder="Search&hellip;">
                      </div>
                  </div>
              </div>
          </div>
          <table class="table table-striped table-hover table-bordered">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>NIS</th>
                      <th>NAMA</th>
                      <th>SALDO</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>211402075</td>
                      <td>Thomas Hardy</td>
                      <td>Rp.1000.000</td>
                      <td>
                          <a  href="/siswa/id" class="view" title="View" data-toggle="tooltip" ><i class="material-icons">&#xE417;</i></a>
                          <a onclick="event.preventDefault()"  href="" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons" data-toggle="modal" data-target="#editModal">&#xE254;</i></a>
                          <form action="/siswa/delete/id" method="post" class="d-inline">
                            <a onclick="event.preventDefault()"  href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                          </form>
                      </td>
                  </tr>
              </tbody>
          </table>
          <div class="clearfix">
              <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
              <ul class="pagination">
                  <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
          </div>
      </div>
  </div>  
</div>
{{-- Table SECTION END --}}
