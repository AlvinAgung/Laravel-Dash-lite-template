
@extends('layout/app')
@section('konten')
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
    @endsection