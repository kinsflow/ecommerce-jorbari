@extends("layout.layout")
@section("content")
    <section class="Mainbreadcrumb">
        <div class="container">
            <p>Home / Cart</p>
        </div>
    </section>
    <section class="shopSection">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="shopTitle">Cart</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="table-responsive" id="cart-table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th><strong>product</strong></th>
                                <th><strong>price</strong></th>
                            </tr>
                            </thead>
                            <tbody id="cart-collections">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="cart-summary">
                        <h4 style="font-weight: 400;margin-bottom: 30px;"><strong>cart totals</strong></h4>
                        <div class="d-flex justify-content-between"
                             style="padding-bottom: 15px;border-bottom: 2px solid #d1d1d1;">
                            <p style="font-size: 15px;color: #171717;font-weight: 200;">subtotal</p>
                            <p class="sum-total" style="font-size: 15px;color: #171717;font-weight: 200;"></p>
                        </div>
                        <div class="d-flex justify-content-between"
                             style="padding-bottom: 15px;/*border-bottom: 2px solid #d1d1d1;*/margin-top: 20px;">
                            <p style="font-size: 15px;color: #171717;font-weight: 400;">total</p>
                            <p class="sum-total" style="font-size: 15px;color: #171717;font-weight: 400;"></p>
                        </div>
                        <div></div>
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#paystack-modal"
                                id="cart-Btn" type="button">proceed to checkout
                        </button>
                        <button class="btn btn-danger btn-block" id="drop-cart-Btn" type="button">delete all cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="paystack">
        <div class="modal fade" id="paystack-modal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content py-5">
                    <div class="form-error" id="paystack-form-error-div" style="display: none; margin: 0 auto">
                        <span class="alert alert-danger" id="paystack-form-error"></span>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Complete Payment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="paymentForm">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form form-control" id="email-address" required/>
                            </div>
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form form-control" id="first-name"/>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form form-control" id="last-name"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="paymentForm" class="btn btn-primary">Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset("js/paystack.js")}}"></script>
@endsection
