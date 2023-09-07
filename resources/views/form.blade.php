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

    <!-- table 2 -->

    <div class="nk-block nk-block-lg">
       
        <div class="card card-preview">
            <div class="card-inner">
                <div class="nk-block nk-block-lg">
                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">Customer Info</h5>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="full-name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email-address">Email address</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="email-address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone No</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="phone-no">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Communication</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="com-email">
                                                <label class="custom-control-label" for="com-email">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="com-sms">
                                                <label class="custom-control-label" for="com-sms">SMS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="com-phone">
                                                <label class="custom-control-label" for="com-phone">Phone</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="pay-amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Payment Methods</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="pay-card">
                                                <label class="custom-control-label" for="pay-card">Card</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                <label class="custom-control-label" for="pay-bitcoin">Bitcoin</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                <label class="custom-control-label" for="pay-cash">Cash</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->

    <!-- table 2 -->

    
</div> <!-- nk-block -->

@endsection