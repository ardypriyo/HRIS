        <div class="modal fade" id="addDept" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST" action="<?php echo base_url().'Departemen/insert'; ?>">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Department</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Dept Code</label>
                                <input type="text" name="kode" class="form-control disabled" readonly value="<?php echo $noTransaksi ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alias Code</label>
                                <input type="text" name="alias" class="form-control" maxlength="25" style="text-transform: uppercase;" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Dept Name</label>
                                <input type="text" name="nama" class="form-control" required maxlength="150" style="text-transform: capitalize;" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ningbo Description</label>
                                <input type="text" name="ningbo" class="form-control" maxlength="150" style="text-transform: capitalize;" autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-flat btn-success"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-flat btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editDept" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST" action="<?php echo base_url().'Departemen/update' ?>">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Department</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Dept Code</label>
                                <input type="text" name="kode" class="form-control disabled" readonly id="edit_kode">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alias Code</label>
                                <input type="text" name="alias" class="form-control" maxlength="25" style="text-transform: uppercase;" autocomplete="off" id="edit_alias">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Dept Name</label>
                                <input type="text" name="nama" class="form-control" required maxlength="150" style="text-transform: capitalize;" autocomplete="off" id="edit_nama">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ningbo Description</label>
                                <input type="text" name="ningbo" class="form-control" maxlength="150" style="text-transform: capitalize;" autocomplete="off" id="edit_ningbo">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-flat btn-success"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-flat btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="hapusDept" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST" action="<?php echo base_url().'Departemen/delete' ?>">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- <div class="form-group"> -->
                                <input type="hidden" name="id" class="form-control" id="id">
                            <!-- </div> -->
                            <p>Are you sure to delete  <b><span id="hapus_alias"></span></b>  department ?</p>
                            <p>Data that has been deleted cannot be restored</p>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-flat btn-danger"><i class="fas fa-trash"></i> Delete</button>
                            <button type="button" class="btn btn-flat btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>