<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("admin/_partial/head"); ?>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Toko Buah</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- navbar -->
    <?php $this->load->view("admin/_partial/navbar"); ?>

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar"); ?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>       
        <br/>
        
        <a href="index.php">Lihat Semua Data</a>

        <br/>
        <h3>Input data baru</h3>
        <form action="input-aksi.php" method="post">		
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>					
                </tr>	
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>					
                </tr>	
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>					
                </tr>	
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>					
                </tr>				
            </table>
        </form>
        
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>

        <!-- Sticky Footer -->
        <?php $this->load->view("admin/_partial/footer"); ?>

        <!-- JavaScript-->
         <?php $this->load->view("admin/_partial/js"); ?>
    </body>

</html>