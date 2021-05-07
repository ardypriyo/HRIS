<div class="modal fade" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Position</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Position Code</label>
                    <input type="text" name="kode" class="form-control disabled" readonly id="kode_insert">
                </div>
                <div class="form-group">
                    <label class="control-label">Position Name</label>
                    <input type="text" name="nama" class="form-control" required id="position_insert" style="text-transform: uppercase;" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">Ningbo Description</label>
                    <input type="text" name="ningbo" class="form-control" style="text-transform: capitalize;">
                </div>
                <div class="form-group">
                    <label class="control-label">Report to</label>
                    <select name="report" class="form-control select2bs4">
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-flat btn-success"><i class="fas fa-save"></i> Save</button>
                <button type="button" class="btn btn-flat btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
        </div>
    </div>
</div>