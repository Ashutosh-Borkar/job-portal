      <!-- create job btn -->
      <input type="submit" value="Create New Job" class="btn btn-primary" name="Submit" style="margin-left: 1rem; margin-bottom: 1rem; float: revert; margin-top: 5rem">

      <!-- job card start -->
      <div class="card" style="margin-left: 1rem; margin-right:1rem">
          <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>Job Id</th>
                          <th>Date</th>
                          <th>Company Name</th>
                          <th>Job Title</th>
                          <th>Employment Type</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Trident</td>
                          <td>Internet
                              Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td> 4</td>
                          <td>X</td>
                          <td class="project-actions text-center">
                              <a class="btn btn-primary btn-sm" href="view.php">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-info btn-sm" href="edit.php">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <!-- <a class="btn btn-danger btn-sm" href="delete.php">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a> -->
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default">
                                  Delete
                              </button>
                          </td>
                      </tr>


                  </tbody>

              </table>
          </div>
      </div>