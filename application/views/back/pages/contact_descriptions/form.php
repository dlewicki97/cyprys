    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row"> 
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Imię i nazwisko:</label>
                                <input class="form-control" type="text" name="name" value="<?php echo @$value->name; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Adres e-mail:</label>
                                <input class="form-control" type="text" name="email" value="<?php echo @$value->email; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Numer telefonu:</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo @$value->phone; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Temat: </label>
                                <input class="form-control" type="text" name="subject" value="<?php echo @$value->subject; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Napisz do nas!: </label>
                                <input class="form-control" type="text" name="text_us" value="<?php echo @$value->text_us; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Wyślij wiadomość: </label>
                                <input class="form-control" type="text" name="button_name" value="<?php echo @$value->button_name; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Gdzie nas znaleźć?: </label>
                                <input class="form-control" type="text" name="find_us" value="<?php echo @$value->find_us; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Menu: </label>
                                <input class="form-control" type="text" name="menu" value="<?php echo @$value->menu; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">E-mail: </label>
                                <input class="form-control" type="text" name="email2" value="<?php echo @$value->email2; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Telefon: </label>
                                <input class="form-control" type="text" name="phone2" value="<?php echo @$value->phone2; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">NIP: </label>
                                <input class="form-control" type="text" name="nip" value="<?php echo @$value->nip; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">Link stihla: </label>
                                <input class="form-control" type="text" name="stihl" value="<?php echo @$value->stihl; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">telefon(działy): </label>
                                <input class="form-control" type="text" name="dep_phone" value="<?php echo @$value->dep_phone; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force ">
                                <label class="form-control-label">tel./fax(działy): </label>
                                <input class="form-control" type="text" name="dep_fax" value="<?php echo @$value->dep_fax; ?>">
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-l-0-force text-center delete_photo cursor" onclick="clear_box(1);">
                            <?php if(@$value->photo != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Zdjęcie:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-t-0-force bd-l-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    
                </div>
                <?php $this->load->view('back/forms/double_modal'); ?>
            </div><!-- row -->
          </form><!-- form-layout -->