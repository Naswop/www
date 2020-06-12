<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>店铺活动管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <!-- <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">ICO dashboard</a></li>
                                    <li><a href="index2.html">Ecommerce dashboard</a></li>
                                    <li><a href="index3.html">SEO dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Sidebar
                                        Types
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">Left Sidebar</a></li>
                                    <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                <ul class="collapse">
                                    <li><a href="barchart.html">bar chart</a></li>
                                    <li><a href="linechart.html">line Chart</a></li>
                                    <li><a href="piechart.html">pie chart</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                                <ul class="collapse">
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alert.html">Alert</a></li>
                                    <li><a href="badge.html">Badge</a></li>
                                    <li><a href="button.html">Button</a></li>
                                    <li><a href="button-group.html">Button Group</a></li>
                                    <li><a href="cards.html">Cards</a></li>
                                    <li><a href="dropdown.html">Dropdown</a></li>
                                    <li><a href="list-group.html">List Group</a></li>
                                    <li><a href="media-object.html">Media Object</a></li>
                                    <li><a href="modal.html">Modal</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="popovers.html">Popover</a></li>
                                    <li><a href="progressbar.html">Progressbar</a></li>
                                    <li><a href="tab.html">Tab</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="form.html">Form</a></li>
                                    <li><a href="grid.html">grid system</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                                <ul class="collapse">
                                    <li><a href="fontawesome.html">fontawesome icons</a></li>
                                    <li><a href="themify.html">themify icons</a></li>
                                </ul>
                            </li> -->
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>积分活动</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="table-layout.php">店铺积分设置</a></li>
                                    <li><a href="table-layout3.php">积分兑礼信息</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                                <ul class="collapse">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login2.html">Login 2</a></li>
                                    <li><a href="login3.html">Login 3</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="register2.html">Register 2</a></li>
                                    <li><a href="register3.html">Register 3</a></li>
                                    <li><a href="register4.html">Register 4</a></li>
                                    <li><a href="screenlock.html">Lock Screen</a></li>
                                    <li><a href="screenlock2.html">Lock Screen 2</a></li>
                                    <li><a href="reset-pass.html">reset password</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                                    <span>Error</span></a>
                                <ul class="collapse">
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="403.html">Error 403</a></li>
                                    <li><a href="500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#" aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item level (1)</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="搜索：" required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">管理后台</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="">活动积分</a></li>
                                <li><span>店铺积分设置</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">店铺积分设置 </h4>
                                <div>
                                    <button class='btn btn-success btn-md mb-3' id='add' style='padding: 1px 16px;margin-left: 5px'>新增</button>
                                    <button class='btn btn-info btn-md mb-3' id='download' style='padding: 1px 16px;margin-left: 5px'><a href="assets/积分活动模板.xlsx" download="积分活动模板.xlsx" style="color: #fff;">下载导入模板</a></button>
                                    <button class='btn btn-primary btn-md mb-3' id='import' style='padding: 1px 16px;margin-left: 5px'>导入</button>
                                </div>

                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>id</th>
                                                <th>店铺号</th>
                                                <th>店铺名</th>
                                                <th>店铺活动1</th>
                                                <th>店铺活动2</th>
                                                <th>店铺活动3</th>
                                                <th>几元积一分</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require "dbconfig.php";
                                            $link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
                                            mysqli_query($link, "set names 'utf8'");

                                            // 3. 从DBNAME中查询到news数据库，返回数据库结果集,并按照addtime降序排列  
                                            $sql = 'select * from possaleinfo order by id asc';
                                            // 结果集
                                            $result = mysqli_query($link, $sql);
                                            // var_dump($result);die;

                                            // 解析结果集,$row为新闻所有数据，$newsNum为新闻数目
                                            $newsNum = mysqli_num_rows($result);

                                            for ($i = 0; $i < $newsNum; $i++) {
                                                $row = mysqli_fetch_assoc($result);
                                                echo "<tr>";
                                                echo "<td>{$row['id']}</td>";
                                                echo "<td>{$row['posnumber']}</td>";
                                                echo "<td>{$row['posname']}</td>";
                                                echo "<td>{$row['possale1']}</td>";
                                                echo "<td>{$row['possale2']}</td>";
                                                echo "<td>{$row['possale3']}</td>";
                                                echo "<td>{$row['ye']}</td>";
                                                echo "<td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button>
                                                <button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td>";
                                                echo "</tr>";
                                            }


                                            // 5. 释放结果集
                                            mysqli_free_result($result);
                                            mysqli_close($link);

                                            ?>
                                        </tbody>
                                    </table>

                                    <!--模态框-->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <span>
                                                        <h4>编号: </h4>
                                                    </span>
                                                    <h4 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">Modal
                                                        title</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>


                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" id="form">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">店铺号</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="posnumber" placeholder="店铺号" data-index="1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺名</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="posname" placeholder="店铺名" data-index="2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动1</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale1" placeholder="店铺活动1" data-index="3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动2</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale2" placeholder="店铺活动2" data-index="4">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动3</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale3" placeholder="店铺活动3" data-index="5">
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">几元积一分</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="ye" placeholder="几元积一分" data-index="6">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="sign">提交</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">新增店铺信息：</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>


                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" id="form2">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">店铺号</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="posnumber" placeholder="店铺号" data-index="1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺名</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="posname" placeholder="店铺名" data-index="2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动1</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale1" placeholder="店铺活动1" data-index="3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动2</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale2" placeholder="店铺活动2" data-index="4">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">店铺活动3</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="possale3" placeholder="店铺活动3" data-index="5">
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">几元积一分</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control ss" name="ye" placeholder="几元积一分" data-index="6">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="sign2">提交</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">导入店铺信息</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>


                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" id="form3">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">选择文件：</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control ss" id="filename" placeholder="请选择文件" data-index="1">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="sign3">提交</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">修改店铺信息</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates explicabo natus nobis, aperiam placeat aliquid nisi ut exercitationem dolor quisquam nam tempora voluptatem. Unde dignissimos est aliquid quidem porro dolorum ipsam suscipit animi quas, debitis ea, sunt quo distinctio doloribus eveniet dolores tempore delectus voluptatum! Possimus earum asperiores animi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2020. All right reserved. </p>
        </div>
    </footer>
    <!-- footer area end-->

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
    <!-- <script src="/jquery.dataTables.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script> -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <!-- <script src="/dash/DataTables/datatables.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
<script>
    refresh()

    function refresh() {
        $.ajax({
            url: "active/layout2/list.php",
            type: "get",
            success: function(res) {
                var data = jQuery.parseJSON(res)
                var str = "";
                for (var i = 0; i < data.length; i++) {
                    str = "<tr><td>" + data[i].id + "</td><td>" +
                        data[i].posnumber + "</td><td>" +
                        data[i].posname + "</td><td>" +
                        data[i].possale1 + "</td><td>" +
                        data[i].possale2 + "</td><td>" +
                        data[i].possale2 + "</td><td>" +
                        data[i].ye + "</td><td>" +
                        data[i].possale1dex + "</td><td>" +
                        data[i].possale2dex + "</td><td>" +
                        data[i].possale3dex + "</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
                    $("#tablehtml").html(str)
                }
            }
        })
    }
    var a = 0;
    $(document).on("click", "#change", function() {
        $('#myModal').modal()
        a = $(this).parents("tr").index() //全局a用来查找当前的下表
        $(this).parents("tr").find("td:not(:last-child)").each(function() {
            var s = $(this).text()
            //                     console.log(s)
            var b = $(this).index()

            if (b > 0) {
                $("#myModal .ss[data-index='" + b + "']").val(s)
            } else {
                $("#myModal .ss[data-index='" + b + "']").text(s)
            }
        })

    })

    $(document).on("click", "#del", function() {
        var _this = $(this)

        $.ajax({
            url: "active/layout/del.php",
            type: "POST",
            data: {
                val: "del",
                id: _this.parents("tr").find("td:eq(0)").text()
            },
            success: function(res) {
                if (res == "1") {
                    _this.parents("tr").remove()
                } else {
                    alert("删除失败")
                }
            }
        })

    })


    $(document).on("click", "#sign", function() {
        var data1 = $("#form").serialize()
        var t = $("#myModalLabel").text()
        $("#myModal").find("input").each(function() {
            var q = $(this).val()
            var s = $(this).data("index")
            $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
        })
        $.ajax({
            url: "active/layout/edit.php?id=" + t,
            type: "POST",
            data: data1,
            success: function(res) {

            }
        })
    })

    $(document).on("click", "#add", function() {
        $('#myModal2').modal()
    })

    $(document).on("click", "#sign2", function() {

        var data1 = $("#form2").serialize()
        $("#myModal2").find("input").each(function() {
            var q = $(this).val()
            var s = $(this).data("index")
            $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
        })
        $.ajax({
            url: "active/layout/add.php",
            type: "POST",
            data: data1,
            success: function(res) {
                alert("提交成功");
            }
        })
    })



    $(document).on("click", "#import", function() {
        $('#myModal3').modal()
    })

    $(document).on("click", "#sign3", function() {
        //获取到选中的文件
        var fileObj = document.getElementById("filename").files[0]
        //创建formdata对象
        var formdata = new FormData();
        formdata.append("filename", fileObj);
        //创建xhr，使用ajax进行文件上传
        var xhr = new XMLHttpRequest();
        var save="active/save.php";
        xhr.open("post", save);
        //回调
        xhr.send(formdata);

        // var data1 = $("#form3").serialize()
        // $("#myModal3").find("input").each(function() {
        //     var q = $(this).val()
        //     var s = $(this).data("index")
        //     $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
        // })
        // $.ajax({
        //     url: "active/layout/add.php",
        //     type: "POST",
        //     data: data1,
        //     success: function(res) {
        //         alert("提交成功");
        //     }
        // })
    })
</script>

</html>