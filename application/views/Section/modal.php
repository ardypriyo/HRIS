        <div class="modal fade" id="addSection" tabindex="-1" role="document">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST" action="<?php echo base_url().'Section/insert'; ?>">
                        <div class="modal-header">  
                            <h5 class="modal-title">Add New Section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Section Code</label>
                                <input type="text" name="kode" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alias</label>
                                <input type="text" name="alias" class="form-control" required maxlength="25" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Section Name</label>
                                <input type="text" name="nama" class="form-control" required maxlength="150" autocomplete="0ff">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ningbo Description</label>
                                <input type="text" name="ningbo" class="form-control" required maxlength="150" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Direct Suprvisor</label>
                                <select name="spv" class="form-control select2bs4" required>
                                    <option value="">Select Direct Supervisor</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>