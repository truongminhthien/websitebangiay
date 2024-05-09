<?php
$theloai = $data["theloai"];
$html_danhmuc = '';
$html_danhmuccha = '';
$html_danhmuccon = '';
$html_dm = '';

$i = 1;
foreach ($theloai as $index => $value) {
    if ($value['giatri'] == 0) {
        $html_theloai = '';
        foreach ($theloai as $key) {
            if ($value['id_tl'] == $key['giatri']) {
                $html_theloai .= '<li><a href="">' . $key['tentheloai'] . '</a></li>';
            }
        }
        $html_danhmuc .= '
        <ul class="single-mega-item" style="
        width: 14%;
    ">
            <li class="menu-title">' . $value['tentheloai'] . '</li>
            ' . $html_theloai . '
        </ul>';

        $html_danhmuccha .= '  <th scope="row">' . $i++ . '</th>
<td>' . $value['tentheloai'] . '</td>
<td class="actions">    <a href="' . BASE_PATH . '/sua/' . $value['id_tl'] . '" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
<a href="' . BASE_PATH . '/xoadm/' . $value['id_tl'] . '"  onclick="return confirm(`Bạn chắc chắn muốn xóa?`)" class="on-default remove-row"><i class="fa fa-trash-o"></i></a></td>
</tr>';
        $p = $value['giatri'] == $data['tentlid'][0]['id_tl'] ? 'selected' : '';
        $html_dm .= ' <option value="' . $value['id_tl'] . '" ' . $p . ' >' . $value['tentheloai'] . '</option>';
    } else {

        foreach ($theloai as $key) {
            if ($key['giatri'] == 0 && $value['giatri'] == $key['id_tl']) {
                $tendanhmuc = $key['tentheloai'];
            }
        }
        // $tendanhmuc = ';';
        $html_danhmuccon .= '<tr class="gradeX">
        <td>' . $i++ . '</td>
        <td> ' . $value['tentheloai'] . '
        </td>
        <td>' . $tendanhmuc . '</td>
        <td class="actions">
            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
            <a href="' . BASE_PATH . '/suatl/' . $value['id_tl'] . '" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
            <a href="' . BASE_PATH . '/xoatl/' . $value['id_tl'] . '"  onclick="return confirm(`Bạn chắc chắn muốn xóa?`)"   class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>';
    }

}

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Editable Tables </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">Zircos</a>
                            </li>
                            <li>
                                <a href="#">Tables </a>
                            </li>
                            <li class="active">
                                Editable Tables
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->



            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Danh Mục</b></h4>
                        <!-- <p class="text-muted m-b-30 font-13">
                            just start typing to edit, or move around with arrow keys or mouse clicks!
                        </p> -->

                        <div class="table-responsive">

                            <div class="mega-menu-link f-left " style="
    width: 100%;
">
                                <?=$html_danhmuc?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="<?=BASE_PATH?>/themdanhmuc"><button id="addToTable"
                                        class="btn btn-success waves-effect waves-light">Add
                                        <i class="mdi mdi-plus-circle-outline"></i></button></a>

                            </div>
                        </div>
                    </div>
                    <?php
if ($data['themdm'] == 1) {
    echo '<div class="row">
<div class="col-md-6">
    <h4 class="m-t-0 header-title"><b>Thêm danh mục</b></h4>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="example-input-small">Tên danh mục</label>
            <div class="col-sm-6">
                <input type="text" id="example-input-small" name="ten"
                    class="form-control input-sm" placeholder="">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Thêm</button>
    </form>
</div> <!-- end col -->
</div>
<!-- end row -->';
} elseif ($data['themdm'] == 2) {
    echo '<div class="row">
<div class="col-md-6">
    <h4 class="m-t-0 header-title"><b>Sữa danh mục</b></h4>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="example-input-small">Tên danh mục</label>
            <div class="col-sm-6">
                <input type="text" id="example-input-small" name="ten" value= "' . $data['tendmid'][0]['tentheloai'] . '"
                    class="form-control input-sm" placeholder="" required >
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Lưu</button>
    </form>
</div> <!-- end col -->
</div>
<!-- end row -->';
}
?>



                    <div class="row">

                        <div class="col-lg-6">
                            <div class="" style=" margin-bottom: 40px;">
                                <h4 class="m-t-0 header-title"><b>Bordered table</b></h4>
                                <p class="text-muted font-13">
                                    Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                </p>

                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên danh mục</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?=$html_danhmuccha?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-b-30">
                                <a href="<?=BASE_PATH?>/themtheloai">
                                    <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i
                                            class="mdi mdi-plus-circle-outline"></i></button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <?php
if ($data['themtl'] == 1) {
    echo '    <div class="row">
    <div class="col-md-6">
        <h4 class="m-t-0 header-title"><b>Thêm danh mục</b></h4>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="example-input-small">Tên thể loại</label>
                <div class="col-sm-6">
                    <input type="text" id="example-input-small" name="ten"
                        class="form-control input-sm" placeholder="">
                </div>

            </div>
            <div class="form-group">

                <label class="col-sm-3 control-label" for="example-input-small">Tên danh
                    mục</label>
                <div class="col-sm-6">
                    <select class="form-control" name="id">
                    ' . $html_dm . '
                    </select>
                </div>
            </div>
            <button type="submit" name="submit"
                class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Thêm</button>
        </form>
    </div> <!-- end col -->
</div>';
} elseif ($data['themtl'] == 2) {
    echo '    <div class="row">
    <div class="col-md-6">
        <h4 class="m-t-0 header-title"><b>Thêm thể loại</b></h4>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="example-input-small">Tên thể loại</label>
                <div class="col-sm-6">
                    <input type="text" id="example-input-small" name="ten" value= "' . $data['tentlid'][0]['tentheloai'] . '"
                        class="form-control input-sm" placeholder="">
                </div>

            </div>
            <div class="form-group">

                <label class="col-sm-3 control-label" for="example-input-small">Tên danh
                    mục</label>
                <div class="col-sm-6">
                    <select class="form-control" name="id">
                    ' . $html_dm . '
                    </select>
                </div>
            </div>
            <button type="submit" name="submit"
                class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Thêm</button>
        </form>
    </div> <!-- end col -->
</div>';
}
?>

                    <div class="">
                        <table class="table table-striped add-edit-table table-bordered" id="datatable-editable">
                            <thead>
                                <tr>
                                    <th style="width:100px">#</th>
                                    <th>Tên thể loại</th>
                                    <th>Tên danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=$html_danhmuccon?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: page -->

            </div> <!-- end Panel -->



        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2016 - 2018 © Zircos theme by Coderthemes.
    </footer>

</div>



<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
        <i class="mdi mdi-close-circle-outline"></i>
    </a>
    <h4 class="">Settings</h4>
    <div class="setting-list nicescroll">
        <div class="row m-t-20">
            <div class="col-xs-8">
                <h5 class="m-0">Notifications</h5>
                <p class="text-muted m-b-0"><small>Do you need them?</small></p>
            </div>
            <div class="col-xs-4 text-right">
                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-xs-8">
                <h5 class="m-0">API Access</h5>
                <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
            </div>
            <div class="col-xs-4 text-right">
                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-xs-8">
                <h5 class="m-0">Auto Updates</h5>
                <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
            </div>
            <div class="col-xs-4 text-right">
                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-xs-8">
                <h5 class="m-0">Online Status</h5>
                <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
            </div>
            <div class="col-xs-4 text-right">
                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
            </div>
        </div>
    </div>
</div>
<!-- /Right-bar -->