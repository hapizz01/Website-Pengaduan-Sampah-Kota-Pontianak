
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
            </div>
            <div class="card-body" style="font-size: 14px;">

            
                    

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Telp</th>
                      
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php
                    include'../koneksi.php';
                    $sql="SELECT*FROM masyarakat";
                    $query=mysqli_query($koneksi, $sql);
                    $no=1;
                    while ($data=mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                       
                           
                        </tr>
                    <?php } ?>
                                
                          
                        
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>