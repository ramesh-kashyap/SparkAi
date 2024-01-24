<section class="section-new-deposit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Deposit Confirmation</h2>
                </div>
                <div class="section-descr">
                    Top up your account. Carefully check the network to which funds to be sent. Specify Destination Tag
                    or Memo if required.
                </div>
                <div class="s-new-deposit-block">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-6 offset-0 offset-lg-1 offset-xl-3">
                            <div class="new-deposit-block">
                                <div class="new-deposit-activation-block">
                                    <div class="iconed-title-block">
                                        <div class="iconed-title iconed-title--attention">Attention </div>
                                    </div>

                                    <div class="form-descr-block">
                                        <div class="form-descr">
                                            <p>Send cryptocurrency with consideration of blockchain and exchange fees.
                                            </p>
                                            <p>
                                                Do not send tokens and coins other than <strong>USDT</strong>, you may
                                                lose them.  it will be automatically activated</p>
                                        </div>
                                    </div>
                                    <div class="new-deposit-activation-fields-block">
                                        <div class="new-deposit-activation-fields">


                                            <div class="field-block">
                                                <div class="field-title-block">
                                                    <div class="field-title">
                                                        Qr Code
                                                    </div>
                                                </div>
                                                <div class="new-dep-activation-block">
                                                    <div class="new-dep-activation-title-block">
                                                      
                                                        <img id="qrCode" style="width: 150px;    margin: 0px auto;"
                                            src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{$walletAddress}}">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="field-block">
                                                <div class="field-title-block">
                                                    <div class="field-title">
                                                        Payment status
                                                    </div>
                                                </div>
                                                <div class="new-dep-activation-block">
                                                    <div class="new-dep-activation-title-block">
                                                        <div class="new-dep-activation-title">
                                                            <strong>Waiting for payment</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="field-block field-block--deposit field-block--can-copy">
                                                <div class="field-title-block">
                                                    <div class="field-title">
                                                        Amount due
                                                    </div>
                                                </div>
                                                <div
                                                    class="field field--iconed field--input field--amount field--can-copy">
                                                    <div class="field__icon"></div>
                                                    <input type="text" name="amount" id="amount-due" readonly
                                                        autocomplete="off" value="{{$invoice_total_sum}}">
                                                    <div class="field-copy-btn-block">
                                                        <button type="button" class="field-copy-btn"
                                                            data-clipboard-target="#amount-due" aria-label="Copied">
                                                            Copy
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="field-block field-block--can-copy">
                                                <div class="field-title-block">
                                                    <div class="field-title">
                                                        Tether {{$paymentMode}} address
                                                    </div>
                                                </div>
                                                <div class="field field--textarea field--can-copy">
                                                    <textarea readonly name="wallet-address" placeholder="Wallet Address" id="wallet-address">{{$walletAddress}}</textarea>
                                                    <div class="field-copy-btn-block">
                                                        <button type="button" class="field-copy-btn"
                                                            data-clipboard-target="#wallet-address" aria-label="Copied">
                                                            Copy
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-wrapper">
                                                <a href="{{route('user.cancel-payment',['id'=>$orderId])}}"
                                                onClick="return confirm('Are you want to  \'Cancel\'');" class="red-btn continue-btn">
                                                    <div class="continue-btn__text">
                                                        Cancel
                                                    </div>
                                                    <div class="continue-btn__icon"></div>
                                                </a>
                                            </div>
























                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
