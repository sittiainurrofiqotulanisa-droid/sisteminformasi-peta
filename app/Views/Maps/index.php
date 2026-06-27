<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->

<div class="page-title">
    <h2>
        <span class="fa fa-home"></span>
        <?= $judul; ?>
    </h2>
</div>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">
                        jVectorMap World
                    </h3>

                    <div class="pull-right">
                        <select class="form-control">
                            <option value="">Select Country</option>
                            <option value="id">Indonesia</option>
                        </select>
                    </div>

                </div>

                <div class="panel-body">

                    <div id="world-map"
                         style="height: 500px;">
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->