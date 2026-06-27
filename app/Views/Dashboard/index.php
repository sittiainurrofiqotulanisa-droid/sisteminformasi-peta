<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->

<div class="page-title">
    <h2><span class="fa fa-home"></span> <?= $judul; ?></h2>
</div>

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->
    <div class="row">

        <div class="col-md-3">

            <!-- START WIDGET SLIDER -->
            <div class="widget widget-default widget-carousel">
                <div class="owl-carousel" id="owl-example">

                    <div>
                        <div class="widget-title">Total Visitors</div>
                        <div class="widget-subtitle">27/08/2014 15:23</div>
                        <div class="widget-int">3,548</div>
                    </div>

                    <div>
                        <div class="widget-title">Returned</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int">1,695</div>
                    </div>

                    <div>
                        <div class="widget-title">New</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int">1,977</div>
                    </div>

                </div>

                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget">
                        <span class="fa fa-times"></span>
                    </a>
                </div>
            </div>
            <!-- END WIDGET SLIDER -->

        </div>

        <div class="col-md-3">

            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                <div class="widget-item-left">
                    <span class="fa fa-envelope"></span>
                </div>

                <div class="widget-data">
                    <div class="widget-int num-count">48</div>
                    <div class="widget-title">New messages</div>
                    <div class="widget-subtitle">In your mailbox</div>
                </div>

                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget">
                        <span class="fa fa-times"></span>
                    </a>
                </div>
            </div>
            <!-- END WIDGET MESSAGES -->

        </div>

        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>

                <div class="widget-data">
                    <div class="widget-int num-count">375</div>
                    <div class="widget-title">Registered users</div>
                    <div class="widget-subtitle">On your website</div>
                </div>

                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget">
                        <span class="fa fa-times"></span>
                    </a>
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>

        <div class="col-md-3">

            <!-- START WIDGET CLOCK -->
            <div class="widget widget-danger widget-padding-sm">

                <div class="widget-big-int plugin-clock">00:00</div>
                <div class="widget-subtitle plugin-date">Loading...</div>

                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget">
                        <span class="fa fa-times"></span>
                    </a>
                </div>

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
            <!-- END WIDGET CLOCK -->

        </div>

    </div>
    <!-- END WIDGETS -->

</div>
<!-- END PAGE CONTENT WRAPPER -->

<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX -->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">

    <div class="mb-container">
        <div class="mb-middle">

            <div class="mb-title">
                <span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?
            </div>

            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if you want to continue work. Press Yes to logout current user.</p>
            </div>

            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>

        </div>
    </div>

</div>