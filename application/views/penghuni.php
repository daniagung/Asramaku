<div class="row bg-title">

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Penghuni</h4></div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                    class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a>/Penghuni</li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Penghuni Asrama</h3>
            <td colspan="2">
                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal"
                        data-target="#add-contact">Tambah Penghuni
                </button>
            </td>
            <div class="scrollable">
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kamar</th>
                            <th>Jurusan</th>
                            <th>Nomor HP</th>
                            <th>ID LINE</th>
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
                            echo "<td>".$obj->nohp."</td>";
                            echo "<td>".$obj->line."</td>";
                            echo "<td> edit / delete </td>";
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
                                        <form class="form-horizontal form-material" action="tambah" method="POST">
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="NIM" name="nim" required="true">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nama" name="nama" required="true">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required="true">
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
