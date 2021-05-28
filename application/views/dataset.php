
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php $this->load->view('__partials/headernav') ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php $this->load->view('__partials/sidenav') ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">DataSet</h5>
                                            <p class="m-b-0">Menambah Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!--  -->

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>Atribut</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#add_atribut"><i class="ti-plus"></i>Add Atribut</button>
                                                        <?php
                                                        if ($this->session->flashdata('message')) {
                                                            $response = $this->session->flashdata('message');
                                                            if ($response['status']) {
                                                        ?>
                                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                    <?php echo $response['message'] ?>
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                    <?php echo $response['message'] ?>
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>

                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-stripped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Atribut</th>
                                                                        <th>Status</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($list_atribut->result() as $atribut) : ?>
                                                                        <tr>
                                                                            <td><?= $atribut->nama_atribut ?></td>
                                                                            <td><?= $atribut->status_atribut ?></td>
                                                                            <td><button class="btn btn-warning" id="editattr" data-toggle="modal" data-target="#edit_atribut<?= $atribut->id_atribut ?>"><i class="ti-pencil-alt"></i></button> | <button class="btn btn-danger" id="hapus_atribut_btn"
                                                                            onclick="return deleteRow('<?= $atribut->id_atribut ?>')" data-id=''><i class="ti-trash"></i></button>
                                                                        
                    <div class="modal fade" tabindex="-1" role="dialog" id="edit_atribut<?= $atribut->id_atribut ?>">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Dataset</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?= base_url() ?>dataset/edit_atribut">
                                <input type="hidden" name="id_atribut" value="<?= $atribut->id_atribut?>"/>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Atribut</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Atribut" name="atribut" value="<?= $atribut->nama_atribut ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Atribut</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Status Atribut" name="status_atribut" value="<?= $atribut->status_atribut ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                                                                        </td>
                                                                        </tr>
                                                                    <?php
                                                                    endforeach;
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>DataSet</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#add_atribut"><i class="ti-plus"></i>Add Dataset</button>
                                                        <?php
                                                        if ($this->session->flashdata('message')) {
                                                            $response = $this->session->flashdata('message');
                                                            if ($response['status']) {
                                                        ?>
                                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                    <?php echo $response['message'] ?>
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                    <?php echo $response['message'] ?>
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>

                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Simple Input</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Placeholder</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" placeholder="Password input">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" role="dialog" id="add_atribut">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Dataset</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?= base_url() ?>dataset/tambah_atribut">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Atribut</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Atribut" name="atribut">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Atribut</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Status Atribut" name="status_atribut">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 <script type="text/javascript">
       function deleteRow(id){
          swal({
                title: 'Hapus Atribut',
                text: 'Anda yakin ingin hapus atribut ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d9534f',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
             },
             function(isConfirm) {
                if (isConfirm) {
                  window.location=`<?= base_url('dataset/delete_atribut/')?>${id}`
                }
             }
          )
       }
 </script>