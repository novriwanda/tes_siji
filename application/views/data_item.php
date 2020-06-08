<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="?page=dashboard">Dashboard</a></li>
                                    <li class="active"> Master Item </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"> Master Item
                        </strong>
                        <div class="box-tools pull-right">
                            <div class="btn-group" role="group">
                                <a 
                                    href="javascript:;"
                                    data-toggle="modal" data-target="#tambah_data">
                                    <button  data-toggle="modal" class="btn btn-primary">
                                <i class="fa fa-plus"></i>&nbsp Tambah
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-block">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> Nama Item </th>
                                    <th> Descripksi Item </th>
                                    <th> Is Done List Item </th>
                                    <th> List </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Psikotest </td>
                                    <td>  </td>
                                    <td> 1 </td>
                                    <td> Proses Recruitment </td>
                                    <td>
                                        <a 
                                            href="javascript:;"
                                            data-id="1"
                                            data-nama="Psikotest"
                                            data-deskripsi=""
                                            data-done="1"
                                            data-list="Proses Recruitment"
                                            data-toggle="modal" data-target="#edit-data"
                                            class="btn btn-info">
                                            <i class="fa fa-pencil"></i>&nbsp Edit    
                                        </a>
                                        <a 
                                            href="javascript:;"
                                            data-id="1"
                                            data-nama="Psikotest"
                                            data-deskripsi=""
                                            data-done="1"
                                            data-list="Proses Recruitment"
                                            data-toggle="modal" data-target="#hapus-data"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash"></i>&nbsp Archived    
                                        </a>
                                    </td>
                                </tr>                               
                                <tr>
                                    <td> Coding Test </td>
                                    <td> Membuat API dan/atau Front end web page sederhana </td>
                                    <td> 1 </td>
                                    <td> Proses Recruitment </td>
                                    <td>
                                        <a 
                                            href="javascript:;"
                                            data-id="2"
                                            data-nama="Coding Test"
                                            data-deskripsi="Membuat API dan/atau Front end web page sederhana"
                                            data-done="1"
                                            data-list="Proses Recruitment"
                                            data-toggle="modal" data-target="#edit-data"
                                            class="btn btn-info">
                                            <i class="fa fa-pencil"></i>&nbsp Edit    
                                        </a>
                                        <a 
                                            href="javascript:;"
                                            data-id="2"
                                            data-nama="Coding Test"
                                            data-deskripsi="Membuat API dan/atau Front end web page sederhana"
                                            data-done="1"
                                            data-list="Proses Recruitment"
                                            data-toggle="modal" data-target="#hapus-data"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash"></i>&nbsp Archived    
                                        </a>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah_data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"> Tambah List Item </h4>
            </div>

            <form class="form-horizontal" action="<?php echo base_url('home/tambah_itemList') ?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label"> Nama List Item </label>
                            <div class="col-lg-12">
                                <input type="text" name="name_listItem" placeholder="E.g : Psikotest " class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label"> Deskripsi List Item </label>
                            <div class="col-lg-12">
                                <input type="text" name="descListItem" placeholder="E.g : Membuat API dan/atau Front end web page sederhana" class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">isDoneListItem </label>
                            <div class="col-lg-12">
                                <input type="number" name="isDoneListItem" placeholder="E.g : 1" class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">Nama List</label>

                        <div class="col-lg-12">
                        <select id="select" class="standardSelect form-control" name="listIdList" required="">
                                <option value="" label="default"></option>
                                <?php 
                                   foreach($data as $s)
                                    {
                                ?>
                                <option value="<?php print_r($s["idList"])?>"><?php print_r($s["nameList"])?></option>
                                <?php }
                                ?>
                        </select>
                        </div>
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="<?php echo base_url()?>assets/syle/choosen/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
    <script>
        $('select').chosen();
    </script>

    <script src="<?php echo base_url()?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/init/datatables-init.js"></script>

    <script src="<?php echo base_url()?>assets/syle/choosen/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
        
    <script type="text/javascript">
        $('select').chosen({width: "inherit"});
    </script>



<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"> Edit Master List</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('home')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label"> Nama List Item </label>
                            <div class="col-lg-12">
                                <input type="text" name="name_listItem" placeholder="E.g : Psikotest " class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label"> Deskripsi List Item </label>
                            <div class="col-lg-12">
                                <input type="text" name="descListItem" placeholder="E.g : Membuat API dan/atau Front end web page sederhana" class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">isDoneListItem </label>
                            <div class="col-lg-12">
                                <input type="number" name="isDoneListItem" placeholder="E.g : 1" class="form-control" id="required-input" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">Nama List</label>

                        <div class="col-lg-12">
                        <select id="select" class="standardSelect form-control" name="listIdList" required="">
                                <option value="" label="default"></option>
                                <?php 
                                   foreach($data as $s)
                                    {
                                ?>
                                <option value="<?php print_r($s["idList"])?>"><?php print_r($s["nameList"])?></option>
                                <?php }
                                ?>
                        </select>
                        </div>
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="hapus-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title"> Hapus Master List</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('home')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label"> Apakah anda yakin menghapus data ini ? </label>
                        <label class="col-lg-12 col-sm-12 control-label"> Nama List </label>
                            <div class="col-lg-12">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="nama" name="nama_list" disabled="">
                            </div>
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="submit"> Delete&nbsp;</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal hapus -->
<script>
    $(document).ready(function() {
        // Untuk sunting
        /*
        data-id="2"
        data-nama="Coding Test"
        data-deskripsi="Membuat API dan/atau Front end web page sederhana"
        data-done="1"
        data-list="Proses Recruitment"
        */
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#color').attr("value",div.data('color'));
        });

        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));            
        });
    });
</script>


