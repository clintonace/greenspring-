<x-guest-layout>


    @section('content')

    <!--Start Checkout Page-->
    <section class="checkout-page">
        <div class="container">

            <div class="your_order">
                <h2>Your Order</h2>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="order_table_box">
                            <table class="order_table_detail">
                                <thead class="order_table_head">
                                    <tr>
                                        <th>Product</th>
                                        <th class="right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro__title">{{$product->name}}</td>
                                        <td class="pro__price">₦{{number_format($product->price)}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Subtotal</td>
                                        <td class="pro__price">₦{{number_format($product->price)}}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="pro__title">Shipping</td>
                                        <td class="pro__price">$0.00 USD</td>
                                    </tr> --}}
                                    <tr>
                                        <td class="pro__title">Total</td>
                                        <td class="pro__price">₦{{number_format($product->price)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="checkout__payment">
                            <div class="checkout__payment__item checkout__payment__item--active">
                                <h3 class="checkout__payment__title">Direct Bank Transfer</h3>
                                <div class="checkout__payment__content">
                                    Make your payment directly into our bank account. Describe your product order
                                    we will get back within the hour once payment is cleared.
                                </div><!-- /.checkout__payment__content -->
                            </div><!-- /.checkout__payment__item -->

                        </div><!-- /.checkout__payment -->

                    </div><!-- /.col-lg-6 -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="billing_details">
                        <div class="billing_title">
                            {{-- <p>Returning Customer? <span>Click here to Login</span></p> --}}
                            <h2>Billing Details</h2>
                        </div>

                        <form class="billing_details_form" action={{route('pay', $product->id)}} method="POST">
                            @csrf
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="email" placeholder="Email address" name="email">

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" placeholder="Insert a number" name="quantity">

                                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <input type="text" placeholder="09031876166" name="phone">

                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="billing_input_box">
                                        <textarea name="location" class="form-control" placeholder="Enter Detailed Location"></textarea>

                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="amount" value="{{$product->price}}">
                            <input type="hidden" name="metadata"
                                value="{{ json_encode($array = ['key_name' => 'value',]) }}">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            <input type="hidden" name="callbackurl" value="{{route('callbackurl')}}">

                            <em style="font-size: 15px; line-height: 1rem" class="text-danger text-center">(You can make
                                payment online,
                                with the buy button below.
                                )</em>
                            <div style="display: flex; justify-content: center; margin-top:5px; margin-bottom: 5px">
                                <button name="paystack" value="paystack" type="submit"
                                    class="btn btn-success">Buy</button>or
                            </div>


                            <em style="font-size: 15px; line-height: 1rem" class="text-danger">(You can place an order
                                via mail, we will
                                reach out to you to confirm the order
                                within an hour.)</em>

                            <div style="display: flex; justify-content: center">

                                <button name="mail" value="mail" type="submit" class="btn btn-success">Order</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Checkout Page-->

    {{-- <div class="project-details__quote">
        <h3 class="project-details__quote-title text-center">Checkout</h3>
        <form action={{route('pay', $product->id)}} method="POST">
            @csrf
            <div class="project-details__input-box">
                <input type="text" placeholder="Your name" name="name">
            </div>
            <div class="project-details__input-box">
                <input type="email" placeholder="Email address" name="email">
            </div>
            <div class="project-details__input-box">
                <input type="number" placeholder="1" name="quantity">
            </div>
            <div class="project-details__input-box">
                <input type="text" placeholder="09031876166" name="phone">
            </div>
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="amount" value="{{$product->price}}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
            <input type="hidden" name="callbackurl" value="{{route('callbackurl')}}">
            <div class="project-details__input-box text-message-box">
                <textarea name="location" placeholder="Enter Detailed Location"></textarea>
            </div>


            <em style="font-size: 15px; line-height: 1rem" class="text-danger text-center">(You can make payment online,
                with the buy button below.
                )</em>
            <div style="display: flex; justify-content: center; margin-top:5px; margin-bottom: 5px">
                <button name="paystack" value="paystack" type="submit" class="btn btn-success">Buy</button>or
            </div>


            <em style="font-size: 15px; line-height: 1rem" class="text-danger">(You can place an order via mail, we will
                reach out to you to confirm the order
                within an hour.)</em>

            <div style="display: flex; justify-content: center">

                <button name="mail" value="mail" type="submit" class="btn btn-success">Order</button>

            </div>
        </form>
    </div> --}}

    @endsection

</x-guest-layout>
