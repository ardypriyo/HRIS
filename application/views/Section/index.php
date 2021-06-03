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
                                    <button type="button" class="btn btn-flat btn-success" 
                                        data-toggle="modal" data-target="#addSection"
                                        data-tooltip="tooltip"
                                        data-placement="top"
                                        title="Add New Section">
                                            <i class="fas fa-plus-circle"></i> Add New Section
                                    </button>
                                </div>

                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-bordered" id="data1">
                                                        <thead>
                                                            <th>No.</th>
                                                            <th>Section Code</th>
                                                            <th>Alias</th>
                                                            <th>Section Name</th>
                                                            <th>Ningbo Name</th>
                                                            <th>Direct Supervisor</th>
                                                            <th>#</th>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
            $this->load->view('Section/modal');
        ?>