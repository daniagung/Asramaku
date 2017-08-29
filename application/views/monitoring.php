    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Monitoring Checkin dan Checkout Kunci Asrama</h3>
                <div class="scrollable">
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="10">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kamar</th>
                                <th>Status</th>
                                <th>Diambil</th>
                                <th>Handphone</th>
                                <th>Waktu</th>
                            </tr>
                            </thead>
                            <div class="form-inline padding-bottom-15">
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6 text-right m-b-20">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off"> </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                            <?php 

                            $i = 1;
                            foreach ($transaksi as $objek) {
                                echo "<tr>";
                                echo "<td>". $i ."</td>";
                                 echo "<td>".$objek->nomor."</td>";
                                 if ($objek->status == "masuk"){
                                    echo "<td><span class='label label-success'>Masuk</span> </td>";
                                 }
                                 else
                                 {
                                    echo "<td><span class='label label-danger'>Keluar</span> </td>";
                                 }
                                 echo "<td>".$objek->nama."</td>";
                                 echo "<td>".$objek->nohp."</td>";
                                 echo "<td>".$objek->tgl."</td>";
                                echo "</tr>";
                                $i++;
                            }

                             ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


