<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg mt-5">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Card Deposit</h3>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block invest-block">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Card Information</h5>
                        </div>
                        <form action="{{ route('fund') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xxl-4">
                                    <div class="form-group">
                                        <label class="form-label" for="default-05">Amount</label>
                                        <div class="form-control-wrap">
                                            <div class="form-text-hint">
                                                <span class="overline-title"><em class="ni ni-sign-kobo"></em></span>
                                            </div>
                                            <input name="amount" type="text" class="form-control" id="default-05" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4">
                                    <div class="form-group">
                                        <label class="form-label" for="pay-amount">Card Number</label>
                                        <div class="form-control-wrap">
                                            <input type="number" name="card_number" class="form-control @error('amount') is-invalid @enderror" id="pay-amount" placeholder="XXXX-XXXX-XXXX">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4">
                                    <div class="form-group">
                                        <label class="form-label" for="pay-amount">CVV</label>
                                        <div class="form-control-wrap">
                                            <input type="number" name="cvv" class="form-control @error('amount') is-invalid @enderror" id="pay-amount" placeholder="123">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label" for="cp1-card-exp-month">Expiration Date</label>
                                        <div class="row gx-2">
                                            <div class="col-6">
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="cp1-card-exp-month" name="exp-month" placeholder="MM">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="cp1-card-exp-year" name="exp-year" placeholder="YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label" for="pay-amount">Card Pin</label>
                                        <div class="form-control-wrap">
                                            <input type="number" name="card_pin" class="form-control @error('amount') is-invalid @enderror" id="pay-amount" placeholder="XXXX">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xxl-8">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Make Deposit</button>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ route('deposit') }}">Return To Payment Method</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
</div>