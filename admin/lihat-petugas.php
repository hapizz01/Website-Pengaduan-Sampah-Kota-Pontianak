
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body" style="font-size: 14px;">

            <a href="admin.php?url=tambah-petugas" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Petugas</span>
                  </a><br><br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Petugas</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Pasword</th>
                      <th>Telp</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php
                    include'../koneksi.php';
                    $sql="SELECT*FROM petugas";
                    $query=mysqli_query($koneksi, $sql);
                    $no=1;
                    while ($data=mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $data['id_petugas']; ?></td>
                            <td><?php echo $data['nama_petugas']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['level']; ?></td>
                            <td>
                            <a href="admin.php?url=edit-petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-primary btn-circle btn-sm">
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="delete-petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin mau hapus?')">
                              <i class="fa fa-trash"></i>
                            </a>
                              
                               
                            </td>
                        </tr>
                    <?php } ?>
                                
                          
                        
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>