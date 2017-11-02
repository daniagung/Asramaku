<div class="row bg-title">

    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"
          rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Penghuni</h4></div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                    class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="monitoring">Dashboard</a>/Penghuni</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Daftar Penghuni Asrama</h3>
            <td colspan="2">
                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal"
                        data-target="#add-contact">Tambah Penghuni
                </button>
                <div class="panel-action"><?php echo $this->session->flashdata('error'); ?></div>
            </td>
            <div class="scrollable">
                <div class="table-responsive">
                    <table id="example23" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kamar</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach ($penghuni as $obj) {
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$obj->nim."</td>";
                            echo "<td>".$obj->nama."</td>";
                            echo "<td>".$obj->nomor."</td>";
                            echo "<td>".$obj->jurusan."</td>";
                            echo "<td> <a href='penghuni/editpenghuni/$obj->nim' type='' class='btn btn-info btn-sm'>Edit</a>";
                            echo " <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"hapus($obj->nim)\">Hapus</button></td>";
                        echo "</tr>";
                        $i++;
                        }


                         ?>
                        </tbody>
                    </table>
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Penghuni</h4></div>
                                        <form class="form-horizontal form-material" action="penghuni/tambah"
                                              method="POST">
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="NIM" name="nim" required="true">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nama" name="nama" required="true">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <!--                                                        <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required="true">-->

                                                        <select class="form-control" name="jurusan">

                                                            <?php
                                                            //                                                            print_r($mahasiswa);
                                                            foreach ($jurusan as $obj) {
                                                                $nama_jurusan = $obj->nama_jurusan;
                                                                echo "<option value='$nama_jurusan'>$nama_jurusan</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nomor Kamar" name="nokamar" required="true">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nomor HP" name="nohp" required="true"></div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="ID LINE" name="idline" required="true">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info waves-effect">Submit
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [

        ]
    });

</script>

<script>
    function hapus(nim) {
        var r = confirm("Anda yakin mau menghapus " + nim + "?");
        if (r == true) {
            window.location.href = "<?php echo base_url();?>penghuni/hapus/" + nim;
        }
    }

</script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet"
      type="text/css">
<!--Style Switcher -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

