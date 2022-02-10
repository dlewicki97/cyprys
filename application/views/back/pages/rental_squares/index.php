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
          <div class="table-wrapper">
            <table id="example" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p align-top">L.p.</th>
                  <th id="order_sort" class="wd-5p align-top">Kolejność</th>
                  <th class="wd-45p align-top">Tytuł</th>
                  <th class="wd-50p text-right no-sort">
                    <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/insert" class="btn btn-sm btn-info"><i class="fa fa-plus mg-r-10"></i> Dodaj</a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach (array_reverse($rows) as $value): $i++; ?>
                <tr>
                  <td class="align-middle"><?php echo $i; ?>.</td>
                  <td class="align-middle">
                  <input class="form-control w-50 order-input" id="getOrder<?php echo $value->id; ?>"
                  name="menu_order" onchange="changeOrder(<?php echo $value->id; ?>)"
                  value="<?php echo @$value->menu_order; ?>">
                </td>
                  <td class="align-middle"><?= substr(strip_tags($value->title), 0, 70); if(strlen($value->title) > 70) echo '...' ?></td>
                  <td class="text-right">
                      <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/update/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-compose mg-r-10"></i> Edytuj</a>
                      <a href="<?php echo base_url(); ?>panel/settings/delete/<?php echo $this->uri->segment(2); ?>/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary" 
                      onclick="return confirm('Czy na pewno chcesz usunąć <?php echo $value->title; ?>? #<?php echo $value->id; ?>')" >
                        <i class="fa fa-close mg-r-10"></i> Usuń
                      </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->


          <script type="text/javascript">
        function changeOrder(id) {
          var id = id;
          var menu_order = document.getElementById('getOrder' + id).value;
          $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>panel/rental_squares/menu_order",
            data: {
              id: id,
              menu_order: menu_order
            },
            cache: false,
            complete: function(html) {

            }
          });
        }
      </script>