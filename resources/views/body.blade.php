@extends('layout/app')
@section('konten')
<div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
        <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
        <h2 class="nk-block-title fw-normal">Judul Menu</h2>
        <div class="nk-block-des">
            <p>Deskripsi Judul Menu</p>
        </div>
    </div>
</div><!-- .nk-block-head -->
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Separated Data Table</h4>
            <div class="nk-block-des">
                <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
            </div>
        </div>
    </div>
    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
        <thead>
            <tr class="nk-tb-item nk-tb-head">
                <th class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="puid">
                        <label class="custom-control-label" for="puid"></label>
                    </div>
                </th>
                <th class="nk-tb-col tb-col-sm"><span>Name</span></th>
                <th class="nk-tb-col"><span>SKU</span></th>
                <th class="nk-tb-col"><span>Price</span></th>
                <th class="nk-tb-col"><span>Stock</span></th>
                <th class="nk-tb-col tb-col-md"><span>Category</span></th>
                <th class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></th>
                <th class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </th>
            </tr><!-- .nk-tb-item -->
        </thead>
        <tbody>
            <tr class="nk-tb-item">
                <td class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="puid1">
                        <label class="custom-control-label" for="puid1"></label>
                    </div>
                </td>
                <td class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="./images/product/a.png" alt="" class="thumb">
                        <span class="title">Pink Fitness Tracker</span>
                    </span>
                </td>
                <td class="nk-tb-col">
                    <span class="tb-sub">UY3749</span>
                </td>
                <td class="nk-tb-col">
                    <span class="tb-lead">$ 99.49</span>
                </td>
                <td class="nk-tb-col">
                    <span class="tb-sub">49</span>
                </td>
                <td class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Fitbit, Tracker</span>
                </td>
                <td class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </td>
                <td class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </td>
            </tr><!-- .nk-tb-item -->
       </tbody>
    </table><!-- .nk-tb-list -->


    <!-- table 2 -->

    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
            <h2 class="nk-block-title fw-normal">DataTable Example</h2>
            <div class="nk-block-des">
                <p class="lead">Using <a href="https://datatables.net/" target="_blank">DataTables</a>, add advanced interaction controls to your HTML tables. It is a highly flexible tool and all advanced features allow you to display table instantly and nice way.</p>
                <p>Check out the <a href="https://datatables.net/" target="_blank">documentation</a> for a full overview.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Data Table</h4>
                <div class="nk-block-des">
                    <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->

    <!-- table 2 -->

    
</div> <!-- nk-block -->

@endsection