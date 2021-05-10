<div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0"><?php echo $judul; ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <?php
                        $this->load->view('Include/error');
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" data-toggle="modal" data-target="#addDept" class="btn btn-flat btn-success"><i class="fas fa-plus-circle"></i> Add New Department</button>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered" id="data1">
                                            <thead>
                                                <th>No</th>
                                                <th>Department Code</th>
                                                <th>Alias</th>
                                                <th>Department Name</th>
                                                <th>Ningbo Description</th>
                                                <th>#</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach($data as $row)
                                                    {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $no++; ?></td>
                                                                <td><?php echo $row->kode; ?></td>
                                                                <td><?php echo $row->alias; ?></td>
                                                                <td><?php echo $row->nama; ?></td>
                                                                <td><?php echo $row->ningbo_desc; ?></td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="" data-toggle="modal" data-target="#editDept" data-id="<?php echo $row->id; ?>" class="btn btn-xs btn-flat btn-warning"><i class="fas fa-edit"></i></a>
                                                                        <a href="" data-toggle="modal" data-target="#hapusDept" data-id="<?php echo $row->id; ?>" data-alias="<?php echo $row->alias; ?>" class="btn btn-xs btn-flat btn-danger"><i class="fas fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php
            $this->load->view('Departemen/modal');
        ?>

        <script>
            $('#editDept').on('show.bs.modal', function(e){
                var dataID = $(e.relatedTarget).data('id');

                $.ajax({
                    'type'      : 'POST',
                    'url'       : '<?php echo base_url().'Departemen/getData'; ?>',
                    'data'      : {dataID:dataID},
                    'dataType'  : 'json',
                    success     : function(data){
                        $('#edit_kode').val(data.kode);
                        $('#edit_alias').val(data.alias);    
                        $('#edit_nama').val(data.nama);
                        $('#edit_ningbo').val(data.ningbo);
                    }
                });
            });

            $('#hapusDept').on('show.bs.modal', function(e){
                var btn = $(e.relatedTarget).data('id');
                var alias = $(e.relatedTarget).data('alias');
                var modal = $(this);

                modal.find('#id').attr("value", btn);
                modal.find('#hapus_alias').text(alias);
            });
        </script>