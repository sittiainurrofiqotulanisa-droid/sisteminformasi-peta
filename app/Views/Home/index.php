<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->

<div class="page-content-wrap">

    <!-- START WIDGETS -->
    <div class="row">

        <div class="col-md-3">
            <div class="widget widget-default widget-carousel">
                <div class="owl-carousel" id="owl-example">
                    <div>
                        <div class="widget-title">Total Penduduk</div>
                        <div class="widget-subtitle">Data seluruh wilayah</div>
                        <div class="widget-int"><?= number_format($totalPenduduk, 0, ',', '.'); ?></div>
                    </div>

                    <div>
                        <div class="widget-title">Jumlah Wilayah</div>
                        <div class="widget-subtitle">Wilayah Terdaftar</div>
                        <div class="widget-int"><?= $jumlahwilayah; ?></div>
                    </div>
                </div>

                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove">
                        <span class="fa fa-times"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-envelope"></span>
                </div>

                <div class="widget-data">
                    <div class="widget-int num-count"><?= $jumlahwilayah; ?></div>
                    <div class="widget-title">Data Wilayah</div>
                    <div class="widget-subtitle">Total Data Tersimpan</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>

                <div class="widget-data">
                    <div class="widget-int num-count"><?= $jumlahwilayah; ?></div>
                    <div class="widget-title">Jumlah Wilayah</div>
                    <div class="widget-subtitle">Wilayah Terdaftar</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-danger widget-padding-sm">
                <div class="widget-big-int plugin-clock">00:00</div>
                <div class="widget-subtitle plugin-date">Loading...</div>

                <div class="widget-buttons widget-c3">
                    <div class="col">
                        <a href="#"><span class="fa fa-clock-o"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-bell"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-calendar"></span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END WIDGETS -->


    <!-- TABEL DATA WILAYAH -->
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Jumlah Penduduk Wilayah</h3>
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wilayah</th>
                                <th>Jumlah Penduduk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($wilayah as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama_wilayah; ?></td>
                                    <td><?= number_format($row->jumlah_penduduk, 0, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!-- END TABEL DATA WILAYAH -->

</div>
<!-- END PAGE CONTENT WRAPPER -->