
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
                      <th>ID Tanggapan</th>
                      <th>ID Pengaduan</th>
                      <th>Tgl Tanggapan</th>
                      <th>Tanggapan</th>
       
                      <th>ID Petugas</th>
                    
                      
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php
                    include'../koneksi.php';
                    $sql="SELECT*FROM tanggapan";
                    $query=mysqli_query($koneksi, $sql);
                    $no=1;
                    while ($data=mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $data['id_tanggapan']; ?></td>
                            <td><?php echo $data['id_pengaduan']; ?></td>
                            <td><?php echo $data['tgl_tanggapan']; ?></td>
              
                            <td><?php echo $data['tanggapan']; ?></td>
                            <td><?php echo $data['id_petugas']; ?></td>
                       
                           
                        </tr>
                    <?php } ?>
                                
                          
                        
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>